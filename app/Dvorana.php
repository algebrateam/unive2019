<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model dvorana sluzi za rezervacije
 * 
 * @author Mrvic 
 */
class Dvorana extends Model
{
   protected $primaryKey = 'id';
   protected $table='dvoranas';
}
