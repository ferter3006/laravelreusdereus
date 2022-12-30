<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdsGeneradesDonamElNumero extends Model
{
    use HasFactory;  
    protected $table = 'ids_donam_el_numeros';
    protected $fillable = [
        'jocs_id',
        'preguntas_donam_el_numeros_id',
        'falta_respondre'
    ];
}
