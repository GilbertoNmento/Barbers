<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



//metodo de colocar as informações no banco criado diretamente no banco, sem criação da model e migration especificos
class agendamentos extends Model
{
    use HasFactory;

    protected $table='agendamentos';
    protected $fillable= [
        'nome',
        'cpf', 
        'barbeiro', 
        'horario',
        'data'
        
    ];
}
