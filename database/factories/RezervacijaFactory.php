<?php
//  php artisan make:factory RezervacijaFactory


use App\Predmet;
use App\Rezervacija;
use Faker\Generator as Faker;

$factory->define(Rezervacija::class, function (Faker $faker) {
    return [
        'predmet_id' => Predmet::select('id')->orderByRaw('RAND()')->first()->id,
        'oznvrstadan' => $faker->randomElement([
          'PO',
          'UT',
          'SR',
          'CE',
          'PE'
          ]),
        'sat' => $faker->numberBetween(4, 20),
      //'created_at'=> now()
    ];
});
/**
 *          $table->increments('id');
            $table->integer('predmet_id')->unsigned();
            $table->string('oznvrstadan', 2)->nullable();
            $table->smallInteger('sat')->nullable();
            $table->timestamps();
 */