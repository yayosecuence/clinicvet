<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrousell extends Model
{
	public $table='carrousells';
	protected $primaryKey ='id';
    protected $fillable = [
        
'nombre_foto',
'descripcion_foto',
'Foto',
    ];
}
