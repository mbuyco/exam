<?php

use Faker\Generator as Faker;

$factory->define(App\Exam::class, function (Faker $faker) {
  return [
    'name' => $faker->name,
    'description' => $faker->text
  ];
});
