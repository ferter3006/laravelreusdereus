<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articulos')->insert([
            [
                'descripcion' => 'cosa 3',
                'precio' => random_int(1, 8),
                'stock' => 1,
            ],
            [
                'descripcion' => 'cosa 4',
                'precio' => random_int(1, 8),
                'stock' => 1,
            ],
            [
                'descripcion' => 'cosa 5',
                'precio' => random_int(1, 8),
                'stock' => 1,
            ]

        ]);
    }
}
