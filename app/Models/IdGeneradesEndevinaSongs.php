<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdGeneradesEndevinaSongs extends Model
{
    use HasFactory;
    protected $table = 'ids_endevina_songs';
    protected $fillable = [
        'jocs_id',
        'endevina_songs_id',
        'falta_respondre'
    ];
}
