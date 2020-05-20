<?php

declare(strict_types=1);

namespace Domain\RoomCategory\Queries;

use App\RoomCategory;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GetRoomCategoryByUuidQuery
{
    /**
     * @var string
     */
    private $uuid;

    /**
     * GetRoomCategoryByUuidQuery constructor.
     * @param string $uuid
     */
    public function __construct(string $uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @return mixed
     */
    public function handle()
    {
        $roomCategory = RoomCategory::with(['rooms'])->firstWhere('id', $this->uuid);

        if (! $roomCategory) {
            throw new ModelNotFoundException(__('room_category.model_not_found'));
        }

        return $roomCategory;
    }
}
