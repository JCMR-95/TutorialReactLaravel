<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class tabla_frutas extends Model
{
    protected $table='tabla_frutas';

    protected $fillable=['id','nombreFruta', 'precioFruta'];

}