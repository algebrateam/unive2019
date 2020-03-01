<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
/**
 * u bazi je zapisano SR , VRATI Srijeda
 */
    public function getOznvrstadanAttribute($value){
      $dan='';
      switch ($value) {
        case 'PO':  $dan= 'Ponedjeljak'; break;
        case 'UT':  $dan= 'Utorak'; break;
        case 'SR':  $dan= 'Srijeda'; break;
        case 'CE':  $dan= 'Četvrtak'; break;
        case 'PE':  $dan= 'Petak'; break;
        default: $dan='Greška, ovo se ne bi trebalo prikazati, polje je možda null?';
        break;
      }
        return $dan;
    }


public function predmet()
    {
        return $this->belongsTo('App\Predmet');
    }
}
/*
$r= Rezervacija::all()->first();
$r->predmet()->get()->first();
$r->predmet()->get()->first()->nazpred;

jedna linija:
echo  Rezervacija::all()->first()->predmet()->get()->first()->nazpred;
 */
