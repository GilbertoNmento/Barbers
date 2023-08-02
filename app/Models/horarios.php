<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




//metodo de chamar um banco de dados direto do servidor sem criar uma migration ou model especifico.

class horarios extends Model
{
    use HasFactory;

    protected $table='horarios';
    public $timestamps= false;
}
