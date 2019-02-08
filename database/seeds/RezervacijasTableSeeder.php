<?php
//php artisan make:seeder RezervacijasTableSeeder

use App\Rezervacija;
use Illuminate\Database\Seeder;

class RezervacijasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Rezervacija::truncate();  // brise sve prethodne podatke
      factory(Rezervacija::class, 250)->create();
    }
}
