<?php

namespace Tests\Unit;

use App\Predmet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PredmetTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPredmetKojiNemajuRezervaciju()
    {
      $p1= Predmet::doesnthave('rezervacije')->count();
      $p2= Predmet::with('rezervacije')->count();
      $p3= Predmet::has('rezervacije')->count();  
      
      $this->assertGreaterThanOrEqual(1, $p1,
        'Nema barem 1 predmeta koji nemaju  rezervaciju');
      
      $this->assertGreaterThanOrEqual(1, $p2,
        'Nismo skuzili with ??? ');
      
      $this->assertGreaterThanOrEqual(1, $p3, 'Nema barem 1 predmeta sa rezervacijama');
      
      $this->assertTrue(true);
    }
    
    /**
     * Pokušamo putem modela Predmet izlistati sve njegove rezervacije
     */
    public function testPredmetDoRezervacije() {
      $brojRezervacija= Predmet::first()->rezervacije()->get()->count();
      $this->assertGreaterThanOrEqual(0, $brojRezervacija, 'Veza predmet na rezervacije nije uspjela, provjeri belongsTo i HasMany !');
    }
}
