<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReglesDelJoc extends Model
{
    use HasFactory;
    protected $table = 'regles_del_joc';
    protected $fillable = [
        'rule',
        'value'
    ];
}
