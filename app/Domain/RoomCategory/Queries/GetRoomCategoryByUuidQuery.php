<?php

declare(strict_types=1);

namespace Domain\RoomCategory\Queries;

use App\RoomCategory;

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
        return RoomCategory::where('id', $this->uuid)->with(['rooms'])->firstOrFail();
    }
}
