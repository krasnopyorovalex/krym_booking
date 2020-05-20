<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use App\RoomCategory;
use Faker\Generator as Faker;

$factory->define(Room::class, static function (Faker $faker) {
    return [
        'name' => $faker->name,
        'room_category_id' => factory(RoomCategory::class),
        'order' => random_int(1, 100)
    ];
});
