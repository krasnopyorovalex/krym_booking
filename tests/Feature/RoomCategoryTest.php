<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Room;
use App\RoomCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoomCategoryTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateRoomCategory(): void
    {
        $roomCategory = factory(RoomCategory::class)->make();

        $this->post(route('room_categories.store'), $roomCategory->toArray())
            ->assertRedirect(route('room_categories.index'));
    }

    public function testRoomCategoryRequiresName(): void
    {
        $roomCategory = factory(RoomCategory::class)->make(['name' => '']);

        $this->post(route('room_categories.store'), $roomCategory->toArray())
            ->assertSessionHasErrors('name');
    }

    public function testSeeRoomCategoriesList(): void
    {
        $roomCategories = factory(RoomCategory::class, 2)->create();

        $this->get(route('room_categories.index'))
            ->assertSeeText($roomCategories[0]->name)
            ->assertStatus(200);
    }

    public function testRoomCategoryHasRooms(): void
    {
        /**@var RoomCategory $roomCategory */
        $roomCategory = factory(RoomCategory::class)->create();

        $roomCategory->rooms()->saveMany(factory(Room::class, 2)->make());

        $room = $roomCategory->rooms()->first();

        $this->assertNotEmpty($roomCategory->rooms());
        $this->assertInstanceOf(Room::class, $room);
    }

    public function testRoomCategoryCanBeDeleted(): void
    {
        /**@var RoomCategory $roomCategory */
        $roomCategory = factory(RoomCategory::class)->create();

        $this->assertDatabaseHas('room_categories', [
            'id' => $roomCategory->id
        ]);

        $this->delete(route('room_categories.destroy', $roomCategory))
            ->assertRedirect(route('room_categories.index'));

        $roomCategory->refresh();

        $this->assertNotNull($roomCategory->deleted_at);
    }
}
