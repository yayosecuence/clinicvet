<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eg_egreso_tachos extends Model
{
   

   protected $fillable = ['cod_tacho','marca_producto','kg_descontar','observacion','codigo_empaque','lote'];


}
