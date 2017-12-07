<?php

use Faker\Generator as Faker;

$factory->define(\App\Application::class, function (Faker $faker) {
    return [
            'type_id' => 1,
            'status_id' => 1,
            'observations' => '',
            'user_id' =>function(){
                    return factory(App\User::class)->create()->id;
                }
    ];
});
