<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Room;
use App\RoomCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoomTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreateRoom()
    {
        $roomCategory = factory(RoomCategory::class)->create();

        $this->get(route('rooms.create', $roomCategory))
            ->assertStatus(200);

        $room = factory(Room::class)->create([
            'room_category_id' => $roomCategory->id
        ]);

        $this->post(route('rooms.create', $roomCategory), $room->toArray());
    }
}
