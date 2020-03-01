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
   protected $primaryKey = 'id';  // opcija, po defaultu je "id"
   protected $table='dvoranas';  // opcija po defaultu "Dvorana" -> "dvoranas"
}
