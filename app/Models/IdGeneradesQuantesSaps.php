<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdGeneradesQuantesSaps extends Model
{
    use HasFactory;
    protected $table = 'ids_quantes_saps';
    protected $fillable = [
        'jocs_id',
        'preguntas_quantes_saps_id',
        'falta_respondre'
    ];
}
