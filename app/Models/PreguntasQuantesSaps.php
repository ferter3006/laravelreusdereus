<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntasQuantesSaps extends Model
{
    use HasFactory;
    protected $fillable = [
        'pregunta',
        'titul',
        'font'
    ];

    public function respostes()
    {
        return $this->hasMany(RespostesQuantesSaps::class);
    }
}
