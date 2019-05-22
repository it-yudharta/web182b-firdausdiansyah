<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\item;
use Faker\Generator as Faker;

$factory->define(item::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'category' =>$faker->name,
        'Product' => $faker->name,
    ];
});
