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
