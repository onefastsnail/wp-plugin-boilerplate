<?php

namespace Onefastsnail\MyPlugin\Mock\RestApi;

function something() {

    $faker = \Faker\Factory::create();

    $json = [];

    for ($i=0; $i < 10; $i++) {

        $obj = new \stdClass;

        $obj->id = $faker->unique()->randomDigit;
        $obj->title = $faker->city;
        $obj->text = $faker->text;
        $obj->address = $faker->address;
        $obj->telephone = $faker->phoneNumber;
        $obj->email = $faker->email;

        array_push($json, $obj);

    }

    return $json;
}
