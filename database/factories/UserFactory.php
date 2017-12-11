<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('password'),
        'phone' => $faker->e164PhoneNumber,
        'remember_token' => str_random(10),
        'is_active' => 0
    ];
});

$factory->define(App\Models\Activation::class, function (Faker $faker) {
    return [
        'code' => str_random(4),
        'completed' => 1,
        'completed_at' => \Carbon\Carbon::now()
    ];
});
