<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barbers extends Model
{
    use HasFactory;

    protected $fillable= [
        'nome', 'cpf', 'data'
    ];
}
