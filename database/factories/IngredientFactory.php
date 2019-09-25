<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ingredient;
use Faker\Generator as Faker;
use Faker\Provider\it_IT\Person as FakerPerson;

$factory->define(Ingredient::class, function (Faker $faker) {
    return array(
        'title'=> $faker->sentence(2),
        'description' =>$faker->sentences(12,true),
        'SKU' => FakerPerson::taxId(),
        'price' => $faker->randomFloat(),
        'short_description' => $faker->sentences(),
    );
});
