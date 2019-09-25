<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use App\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class,function(Faker $faker) {
    $role = Role::where('name','=', Config::get('constants.db.roles.user'))->first();
    return [
        'name' => $faker->firstName,
        'role_id' => $role ->id,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => $faker->password(8,20),
        'remember_token' => Str::random(10),
    ];
});
