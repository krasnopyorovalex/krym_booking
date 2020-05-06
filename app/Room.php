<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use SoftDeletes, HasUuid;

    protected $guarded = [];

    /**
     * @return HasOne
     */
    public function categoryRoom(): HasOne
    {
        return $this->hasOne(RoomCategory::class);
    }
}
