<?php

use Faker\Generator as Faker;

$factory->define(Mahdcast\Lesson::class, function (Faker $faker) {
    return [
        //fields with faker types
        'series_id'=>function(){
            return factory(\Mahdcast\Series::class)->create()->id;
        }
    ];
});
