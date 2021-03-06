<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Page;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Page::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
