<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EndevinaSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('endevina_songs')->insert([
            ["title" => 'A quien le importa - Alaska y Dinarama.mp3'],
            ["title" => 'Back to Black - Amy Winehouse.mp3'],
            ["title" => 'Beat It - Michael Jackson.mp3'],
            ["title" => 'Ciega, Sordomuda - Shakira.mp3'],
            ["title" => 'Estoy Aqui - Shakira.mp3'],
            ["title" => 'Funkytown - Lipps Inc.mp3'],
            ["title" => 'Heart Of Glass - Blondie.mp3'],
            ["title" => 'I Wanna Dance With Somebody - Whitney Houston.mp3'],
            ["title" => 'In the end - Linkin Park.mp3'],
            ["title" => 'La flaca - Jarabe de Palo.mp3'],
            ["title" => 'Marta, Sebas, Guille y los demas - Amaral.mp3'],
            ["title" => 'Mi gran noche - Raphael.mp3'],
            ["title" => 'No dudaria - Antonio Flores.mp3'],
            ["title" => 'Pajaros de Barro - Manolo Garcia.mp3'],
            ["title" => 'Tainted Love - Soft Cell.mp3'],
            ["title" => 'Take on Me - Aha.mp3'],
            ["title" => 'This Is The Life - Amy Macdonald.mp3'],
            ["title" => 'Time after time - Cyndi Lauper.mp3'],
            ["title" => 'Un velero llamado Libertad - Jose Luis Perales.mp3'],
            ["title" => 'Under pressure - Queen.mp3'],
            ["title" => 'Zombie - The Cranberries.mp3']
        ]);
    }
}
