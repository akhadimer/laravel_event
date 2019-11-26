<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Evenement;
use Faker\Generator as Faker;

$factory->define(Evenement::class, function (Faker $faker) {
    return [
        'titre' => $faker->word,
        'date' => $faker->dateTime($max = 'now', $timezone = null),
        'url_image' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
        'nbr_participants' => $faker->numberBetween($min = 2, $max = 36),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'lieu' => $faker->streetAddress,
    ];
});