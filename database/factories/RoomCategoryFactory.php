<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RoomCategory;
use Faker\Generator as Faker;

$factory->define(RoomCategory::class, static function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'order' => random_int(1, 100)
    ];
});
