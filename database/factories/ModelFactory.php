<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/



$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        // 'password' => bcrypt(str_random(10)),
        'password' => '$2y$10$kUur/TaaeH5MDxv37aohXOQ3CI8p6ovzWADjmAENL9o3pSTn4n1bW',
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'slug' => $faker->slug,
        'content' => $faker->paragraph,
        'user_id' => factory(App\User::class)->create()->id,
    ];
});
