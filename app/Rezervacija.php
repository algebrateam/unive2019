<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
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
