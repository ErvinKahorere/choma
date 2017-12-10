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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'city' => $faker->city,
        'phone_number' =>$faker->phoneNumber
    ];
});

// database/factories/ModelFactory.php

$factory->define(App\Card::class, function (Faker\Generator $faker) {
    // Get a random user
    $user = \App\User::inRandomOrder()->first();

    // generate fake data for post
    return [
        'user_id' => $user->id,
        'card_product_name' => $faker->sentence,
        'card_product_description' => $faker->text,
        'card_old_price' =>$faker->randomNumber(2),
        'card_new_price' =>$faker->randomNumber(2),
        'card_discount_percentage' =>$faker->randomNumber(2),
        'cover_image' => $faker->image('public/storage/featured_images',400,300, null, false),
        'category_id' => $faker->randomNumber(1),
        'card_duration' => $faker->randomNumber(2),
        'approved' => $faker->boolean($chanceOfGettingTrue = 50)
        
    ];
});
