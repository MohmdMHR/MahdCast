<?php

use Faker\Generator as Faker;

$factory->define(Mahdcast\Series::class, function (Faker $faker) {
    
    $title = $faker->sentence(5);
    return [
        'title' => $title,
        'slug'=> str_slug($title),
        'title'=> $faker->imageUrl(),
        'title'=> $faker->paragraph()
    ];
});
