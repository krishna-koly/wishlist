<?php

use Faker\Generator as Faker;

$factory->define(App\Size::class, function (Faker $faker) {
    return [
        //

        'name' => $faker->word,
        'action'=>1
    ];
});
