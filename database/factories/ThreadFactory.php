<?php

use App\Thread;
use Faker\Generator as Faker;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        //
        'ThreadSubject' => $faker->text,
        'ThreadDescription' => $faker->text,
        'ThreadVoteCount' => $faker->randomDigitNotNull,
    ];
});
