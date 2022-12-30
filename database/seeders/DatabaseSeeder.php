<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ReglesDelJoc;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArticuloSeeder::class);
        $this->call(PreguntasDonemElNumeroSeeder::class);
        $this->call(PreguntasQuantesSapsSeeder::class);
        $this->call(RespostesQuantesSapsSeeder::class);
        $this->call(PreguntasUnaDeDuesSeeder::class);
        $this->call(EndevinaSongSeeder::class);
        $this->call(ReglesDelJocSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
    }
}
