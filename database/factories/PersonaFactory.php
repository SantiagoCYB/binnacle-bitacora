<?php

use Faker\Generator as Faker;

$factory->define(App\Persona::class, function (Faker $faker) {
    return [
    	'documento'=>rand ( 10000 , 99999 ),
        'apellidos'=>$faker->lastName,
    	'nombre'=>$faker->name,
    	'direccion'=>$faker->address,
    	'genero'=>array_random(["M","F"]),
    ];
});
