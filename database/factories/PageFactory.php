<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'intro' => $faker->paragraph(5, false),
        'content' => $faker->paragraphs(10, false) ,
    ];
});
