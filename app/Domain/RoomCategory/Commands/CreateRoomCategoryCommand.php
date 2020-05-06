<?php

declare(strict_types=1);

namespace Domain\RoomCategory\Commands;

use App\Http\Requests\Request;
use App\RoomCategory;

class CreateRoomCategoryCommand
{
    /**
     * @var Request
     */
    private $request;

    /**
     * CreateRoomCategoryCommand constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function handle(): void
    {
        $roomCategory = new RoomCategory;
        $roomCategory->fill($this->request->all());

        $roomCategory->save();
    }
}
