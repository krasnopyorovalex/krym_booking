<?php

declare(strict_types=1);

namespace Domain\Room\Commands;

use App\Http\Requests\Request;
use App\Room;
use App\RoomCategory;

class CreateRoomCommand
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var RoomCategory
     */
    private $roomCategory;

    /**
     * CreateRoomCommand constructor.
     * @param Request $request
     * @param RoomCategory $roomCategory
     */
    public function __construct(Request $request, RoomCategory $roomCategory)
    {
        $this->request = $request;
        $this->roomCategory = $roomCategory;
    }

    public function handle(): void
    {
        $room = new Room;
        $room->fill($this->request->validated());

        $this->roomCategory->rooms()->save($room);
    }
}
