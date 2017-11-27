<?php

$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
        "email" => $faker->safeEmail,
        "company_id" => factory('App\Company')->create(),
    ];
});
