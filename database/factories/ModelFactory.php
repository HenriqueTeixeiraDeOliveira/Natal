<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Competitor::class, function (Faker $faker){
    return [
        'name' => $faker->name,
        'age' => mt_rand(1,5)
    ];
});


$factory->define(App\Question::class, function (Faker $faker){
   return [
       'topic_id' => mt_rand(1,6),
       'question' => $faker->sentence(10),
       'first' => $faker->sentence(3),
       'second' => $faker->sentence(3),
       'third' => $faker->sentence(5),
       'fourth' => $faker->sentence(6),
       'answer' => mt_rand(1,4),
       'done' => false,
       'link' => $faker->sentence()
   ];
});

$factory->define(App\Topic::class, function (Faker $faker){
    return [
        'name' => "topic",
        'description' => $faker->sentence(7)
    ];
});

$factory->define(App\Blooper::class, function (Faker $faker){
    return [
        'title' => $faker->name,
        'description' => $faker->name,
        'age' => mt_rand(1,5)
    ];
});