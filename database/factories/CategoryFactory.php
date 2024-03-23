<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    $slug =  str_slug($title, "-");
    return [
        
        'name' => $title,
        'slug' => $slug,
       
        'body' => $faker->text(500),
        

    ];
});
