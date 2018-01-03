<?php

use Faker\Generator as Faker;

$factory->define(App\Concepto::class, function (Faker $faker) {
    return [
    	'codigo'=>array_random(["01","02","03","04","05","06","07","08","09","10"]),
    	'nombre'=>$faker->name,
        'descripcion'=>$faker->realText(100, $indexSize = 2),
    ];
});
