<?php

declare(strict_types=1);

namespace Domain\RoomCategory\Commands;

use App\RoomCategory;
use Domain\RoomCategory\Queries\GetRoomCategoryByUuidQuery;
use Exception;
use Illuminate\Foundation\Bus\DispatchesJobs;

class DeleteRoomCategoryCommand
{
    use DispatchesJobs;

    /**
     * @var string
     */
    private $uuid;

    /**
     * DeleteRoomCategoryCommand constructor.
     * @param string $uuid
     */
    public function __construct(string $uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @throws Exception
     */
    public function handle(): void
    {
        /**@var RoomCategory $roomCategory */
        $roomCategory = $this->dispatch(new GetRoomCategoryByUuidQuery($this->uuid));

        $roomCategory->delete();
    }
}
