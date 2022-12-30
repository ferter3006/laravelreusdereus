<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdsGeneradesUnaDeDues extends Model
{
    use HasFactory;
    protected $table = 'ids_una_de_dues';
    protected $fillable = [
        'jocs_id',
        'preguntas_una_de_dues_id',
        'falta_respondre'
    ];
}
