<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespostesQuantesSaps extends Model
{
    use HasFactory;

    protected $fillable = [        
        'preguntas_quantes_saps_id',
        'resposta'
    ];
}

