<?php

namespace Database\Seeders;

use App\Models\ReglesDelJoc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReglesDelJocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = [
            [
                'rule' => 'punts_guanya_prova_1',
                'value' => 10
            ],
            [
                'rule' => 'punts_guanya_prova_2',
                'value' => 20
            ],
            [
                'rule' => 'punts_perd_prova_2',
                'value' => -10
            ],
            [
                'rule' => 'punts_guanya_prova_3',
                'value' => 20
            ],
            [
                'rule' => 'punts_guanya_prova_4',
                'value' => 20
            ],
            [
                'rule' => 'quantitat_preguntes_donam_el_numero',
                'value' => 15
            ],
            [
                'rule' => 'quantitat_preguntes_endevina_song',
                'value' => 6
            ],
            [
                'rule' => 'quantitat_preguntes_una_de_dues',
                'value' => 9
            ],
            [
                'rule' => 'quantitat_preguntes_quantes_saps',
                'value' => 6
            ],
            
        ];

        ReglesDelJoc::insert($data);
    }
}
