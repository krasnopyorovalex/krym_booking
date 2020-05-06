<?php

declare(strict_types=1);

namespace Domain\RoomCategory\Commands;

use App\Http\Requests\Request;
use App\RoomCategory;
use Domain\RoomCategory\Queries\GetRoomCategoryByUuidQuery;
use Illuminate\Foundation\Bus\DispatchesJobs;

class UpdateRoomCategoryCommand
{
    use DispatchesJobs;

    /**
     * @var Request
     */
    private $request;
    /**
     * @var string
     */
    private $uuid;

    /**
     * UpdateRoomCategoryCommand constructor.
     * @param Request $request
     * @param string $uuid
     */
    public function __construct(Request $request, string $uuid)
    {
        $this->request = $request;
        $this->uuid = $uuid;
    }

    public function handle(): void
    {
        /**@var RoomCategory $roomCategory */
        $roomCategory = $this->dispatch(new GetRoomCategoryByUuidQuery($this->uuid));

        $roomCategory->update($this->request->all());
    }
}
