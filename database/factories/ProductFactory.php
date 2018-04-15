<?php

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->words(3, true),
        'quantity' => $faker->randomNumber(2),
        'description' => $faker->paragraph(3),
        'category_id' => $faker->randomElement(array_keys(Product::CATEGORIES)),
    ];
});
