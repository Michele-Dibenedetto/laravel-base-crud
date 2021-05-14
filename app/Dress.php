<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    protected $fillable = ["taglia", "tipo", "colore", "sesso", "costo", "marca", "immagine"];
}
