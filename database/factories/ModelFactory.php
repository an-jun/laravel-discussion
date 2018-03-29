<?php

use Faker\Generator as Faker;

// $factory->define(App\User::class, function (Faker $faker) {
//     return [
//         'name'=>$faker->name,
//         'email'=>$faker->email,
//         'avatar'=>$faker->imageUrl(256,256),
//         'password'=>bcrypt(str_random(10)),
//         'remember_token'=>str_random(10),
//     ];
// });
$factory->define(App\Discussion::class, function (Faker $faker) {
    $user_ids = \App\User::pluck('id')->toArray();
    return [
        'title'=>$faker->sentence,
        'body'=>$faker->paragraph,
        'user_id'=>$faker->randomElement($user_ids),
        'last_user_id'=>$faker->randomElement($user_ids),
    ];
});