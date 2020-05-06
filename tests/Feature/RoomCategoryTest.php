<?php

declare(strict_types=1);

namespace Tests\Feature;

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
        $this->get(route('room_categories.index'))
            ->assertStatus(200);
    }
}
