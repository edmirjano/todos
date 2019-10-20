<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\todo::class, function (Faker $faker) {
    return [
        //
        'name'=> $faker->sentence(3),
        'description'=> $faker->paragraph(4),
        'done'=>false
    ];
});
