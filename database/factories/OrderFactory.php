<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'job_no' =>  $faker->regexify('[A-Za-z0-9]{5}')
        
    ];
});
