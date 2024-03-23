<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    $title = $faker->unique()->sentence(5);
    return [
        'name' => $title, //Uno Dos
        'slug' => str_slug($title), //uno-dos
        'created_at' => now()
       
        
    ];
});
