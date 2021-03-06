<?php

use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'image' => '/images/users/avatar.svg',
        'remember_token' => Str::random(10),
    ];
});


$factory->define(\App\Post::class, function (Faker $faker) {

    $title = $faker->sentence(8);

    return [
        'title' => $title,
        'slug' => str_slug($title),
        'subtitle' => 'Getting Started',
        'body' => $faker->paragraph,
        'reading_time' => $faker->numberBetween(1, 20),
        'image' => '/images/posts/post.jpg',
        'user_id' => factory(User::class)->create(),
    ];
});


$factory->define(\App\Reply::class, function (Faker $faker) {

    return [
        'body' => $faker->paragraph,
        'user_id' => factory(User::class)->create(),
        'post_id' => factory(\App\Post::class)->create(),
    ];
});
