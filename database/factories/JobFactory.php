<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Job::class, function (Faker $faker) {
    return [
        'employer_id' => 1,
        'category_id' => rand(1,10),
        'title' => $faker->jobTitle,
        'post_name' => $faker->city,
        'description' => $faker->realText(),
        'salary' => $faker->randomNumber(4),
        'country' => $faker->country,
        'job_type' => 'Full-Time',
    ];
});
