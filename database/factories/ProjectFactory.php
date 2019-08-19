<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'name' => $faker->catchPhrase,
        'description' => $faker->realText(200, 2),
        'owner_id' => $faker->numberBetween(1, 50),
        'categorie_id' => $faker->numberBetween(1, 9),
        'image' => $faker->imageUrl(640,640),
    ];
});
