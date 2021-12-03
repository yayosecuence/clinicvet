<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eg_cod_egresos extends Model
{
   protected $fillable = ['cod_egreso','estado', 'cod_lote', 'persona'];
}
