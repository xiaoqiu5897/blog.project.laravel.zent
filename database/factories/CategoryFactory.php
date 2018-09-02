<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'parent_id' => 1,
		'thumbnail' => $faker->imageUrl($width = 640, $height = 480), 
		'slug' => $faker->slug(),
		'description' => $faker->text($maxNbChars = 500),
	];
});
