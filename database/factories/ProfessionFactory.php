<?php

use App\Profession;
use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Profession::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence
    ];
});
