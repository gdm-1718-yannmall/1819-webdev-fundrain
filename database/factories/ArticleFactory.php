<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5, true),
        'intro' => $faker->paragraph(5, true),
        'content' => $faker->paragraphs(3, true),
        'image' => $faker->imageUrl(640, 640),
        'author'=> $faker->userName,
    ];
});
