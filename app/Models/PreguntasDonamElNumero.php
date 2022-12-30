<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntasDonamElNumero extends Model
{
    use HasFactory;
    protected $fillable = [
        'pregunta',
        'resposta',
        'font'
    ];
}



