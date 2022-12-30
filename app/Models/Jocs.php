<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jocs extends Model
{
  use HasFactory;
  protected $fillable = [
    'user_id',
    'team1name',
    'team2name',
    'team3name',    
    'team1points',
    'team2points',
    'team3points',
    'prova1Completed',
    'prova2Completed',
    'prova3Completed',
    'prova4Completed',
  ];


  public function IdsGeneradesDonamElNumero()
  {
    return $this->hasMany(IdsGeneradesDonamElNumero::class);
  }  
  public function idGeneradesQuantesSaps()
  {
    return $this->hasMany(idGeneradesQuantesSaps::class);
  }
  public function idsGeneradesUnaDeDues()
  {
    return $this->hasMany(idsGeneradesUnaDeDues::class);
  }
  public function IdGeneradesEndevinaSongs()
  {
    return $this->hasMany(IdGeneradesEndevinaSongs::class);
  }
  
}
