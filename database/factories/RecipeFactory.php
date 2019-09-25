<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recipe;
use Faker\Generator as Faker;

$factory->define(Recipe::class, function (Faker $faker) {
     return [
        'name' =>$faker->unique()->word,
        'description' => $faker->sentences(),
         'cooking_method' =>$faker->sentences(),
         'short_description'=>$faker->sentences(),

     ];
});
