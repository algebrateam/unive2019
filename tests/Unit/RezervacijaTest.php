<?php

namespace Tests\Unit;

use App\Rezervacija;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RezervacijaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testRezervacijaPostojiPredmet()
    {
      $r=Rezervacija::all()->first()->predmet()->get()->first()->nazpred; 
    $this->assertGreaterThanOrEqual(2, strlen($r), 'Ne postoji predmet za ovu rezervaciju???');
    }
}
