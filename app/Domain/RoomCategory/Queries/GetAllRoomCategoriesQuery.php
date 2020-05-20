<?php

declare(strict_types=1);

namespace Domain\RoomCategory\Queries;

use App\RoomCategory;
use Illuminate\Database\Eloquent\Collection;

class GetAllRoomCategoriesQuery
{
    /**
     * @return RoomCategory[]|Collection
     */
    public function handle()
    {
        return RoomCategory::with(['rooms'])->withCount('rooms')->get();
    }
}
