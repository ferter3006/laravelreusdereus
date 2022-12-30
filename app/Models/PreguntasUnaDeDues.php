<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntasUnaDeDues extends Model
{
    use HasFactory;    
    protected $fillable = [        
        'pregunta',
        'resposta1',
        'resposta2',
        'resposta3',
        'font',
    ];
}
