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

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'body' => $faker->realText($maxNbChars = 300, $indexSize = 4),
        'tags' => $faker->word.",".$faker->word . "," . $faker->word,
    ];
});
