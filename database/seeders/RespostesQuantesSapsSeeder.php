<?php

namespace Database\Seeders;

use App\Models\RespostesQuantesSaps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespostesQuantesSapsSeeder extends Seeder
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
                'preguntas_quantes_saps_id' => '1',
                'resposta' => "Arroz"
            ],
            [
                'preguntas_quantes_saps_id' => '1',
                'resposta' => "Agua o caldo"
            ],
            [
                'preguntas_quantes_saps_id' => '1',
                'resposta' => "Pollo de corral"
            ],
            [
                'preguntas_quantes_saps_id' => '1',
                'resposta' => "Conejo"
            ],
            [
                'preguntas_quantes_saps_id' => '1',
                'resposta' => "Judia verde plana"
            ],
            [
                'preguntas_quantes_saps_id' => '1',
                'resposta' => "Garrofó (haba de lima)"
            ],
            [
                'preguntas_quantes_saps_id' => '1',
                'resposta' => "Alcachofa"
            ],
            [
                'preguntas_quantes_saps_id' => '1',
                'resposta' => "Caracoles"
            ],
            [
                'preguntas_quantes_saps_id' => '1',
                'resposta' => "Aceite de oliva"
            ],
            [
                'preguntas_quantes_saps_id' => '1',
                'resposta' => "Pimentón dulce"
            ],
            [
                'preguntas_quantes_saps_id' => '1',
                'resposta' => "Tomate"
            ],
            [
                'preguntas_quantes_saps_id' => '1',
                'resposta' => "Azafrán"
            ],
            [
                'preguntas_quantes_saps_id' => '1',
                'resposta' => "Romero"
            ],
            [
                'preguntas_quantes_saps_id' => '1',
                'resposta' => "Sal"
            ],
            [
                'preguntas_quantes_saps_id' => '2',
                'resposta' => "Kareem Abdul-JAabbar(6)"
            ],
            [
                'preguntas_quantes_saps_id' => '2',
                'resposta' => "Bill Russell(5)"
            ],
            [
                'preguntas_quantes_saps_id' => '2',
                'resposta' => "Michael Jordan(5)"
            ],
            [
                'preguntas_quantes_saps_id' => '2',
                'resposta' => "Wilt Chamberlain(4)"
            ],
            [
                'preguntas_quantes_saps_id' => '2',
                'resposta' => "LeBron James(4)"
            ],
            [
                'preguntas_quantes_saps_id' => '2',
                'resposta' => "Moses Malon(3)"
            ],
            [
                'preguntas_quantes_saps_id' => '2',
                'resposta' => "Larry Bird(3)"
            ],
            [
                'preguntas_quantes_saps_id' => '2',
                'resposta' => "Magic Johnson(3)"
            ],
            [
                'preguntas_quantes_saps_id' => '3',
                'resposta' => "Waterloo"
            ],
            [
                'preguntas_quantes_saps_id' => '3',
                'resposta' => "Mamma mia"
            ],
            [
                'preguntas_quantes_saps_id' => '3',
                'resposta' => "Chiquitita"
            ],
            [
                'preguntas_quantes_saps_id' => '3',
                'resposta' => "Dancing Queen"
            ],
            [
                'preguntas_quantes_saps_id' => '3',
                'resposta' => "Gimme, gimme, gimme"
            ],
            [
                'preguntas_quantes_saps_id' => '3',
                'resposta' => "Super trouper"
            ],
            [
                'preguntas_quantes_saps_id' => '3',
                'resposta' => "I have a dream"
            ],
            [
                'preguntas_quantes_saps_id' => '3',
                'resposta' => "Fernando"
            ],
            [
                'preguntas_quantes_saps_id' => '3',
                'resposta' => "Does your mother know"
            ],
            [
                'preguntas_quantes_saps_id' => '3',
                'resposta' => "The winner takes it all"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Esclat"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Bon preu"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Bonàrea"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Hpercor"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "El corte inglés"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Hiper Usera"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Aldi"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Supercor"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Consum"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Alcampo"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Lidl"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Froiz"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Gadis"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Leclerc"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Mercadona"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Ahorramás"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Alimerka"
            ],
            [
                'preguntas_quantes_saps_id' => '4',
                'resposta' => "Eroski"
            ],
            [
                'preguntas_quantes_saps_id' => '5',
                'resposta' => "Sympathy for the Devil"
            ],
            [
                'preguntas_quantes_saps_id' => '5',
                'resposta' => "Angie"
            ],
            [
                'preguntas_quantes_saps_id' => '5',
                'resposta' => "Undercover"
            ],
            [
                'preguntas_quantes_saps_id' => '5',
                'resposta' => "Satisfaction"
            ],
            [
                'preguntas_quantes_saps_id' => '5',
                'resposta' => "Paint it black"
            ],
            [
                'preguntas_quantes_saps_id' => '5',
                'resposta' => "Brown Sugar"
            ],
            [
                'preguntas_quantes_saps_id' => '5',
                'resposta' => "Gimme shelter"
            ],
            [
                'preguntas_quantes_saps_id' => '5',
                'resposta' => "Start me up"
            ],
            [
                'preguntas_quantes_saps_id' => '5',
                'resposta' => "Miss You"
            ],
            [
                'preguntas_quantes_saps_id' => '5',
                'resposta' => "Wild Horses"
            ],
            [
                'preguntas_quantes_saps_id' => '6',
                'resposta' => "Red delicious"
            ],
            [
                'preguntas_quantes_saps_id' => '6',
                'resposta' => "Royal gala"
            ],
            [
                'preguntas_quantes_saps_id' => '6',
                'resposta' => "Fuji"
            ],
            [
                'preguntas_quantes_saps_id' => '6',
                'resposta' => "Pink Lady"
            ],
            [
                'preguntas_quantes_saps_id' => '6',
                'resposta' => "Granny Smith"
            ],
            [
                'preguntas_quantes_saps_id' => '6',
                'resposta' => "Reineta"
            ],
            [
                'preguntas_quantes_saps_id' => '6',
                'resposta' => "Golden"
            ],
            [
                'preguntas_quantes_saps_id' => '7',
                'resposta' => "Miño"
            ],
            [
                'preguntas_quantes_saps_id' => '7',
                'resposta' => "Duero"
            ],
            [
                'preguntas_quantes_saps_id' => '7',
                'resposta' => "Tajo"
            ],
            [
                'preguntas_quantes_saps_id' => '7',
                'resposta' => "Ebro"
            ],
            [
                'preguntas_quantes_saps_id' => '7',
                'resposta' => "Guadiana"
            ],
            [
                'preguntas_quantes_saps_id' => '7',
                'resposta' => "Guadalquivis"
            ],
            [
                'preguntas_quantes_saps_id' => '7',
                'resposta' => "Júcar"
            ],
            [
                'preguntas_quantes_saps_id' => '7',
                'resposta' => "Segura"
            ],
            [
                'preguntas_quantes_saps_id' => '8',
                'resposta' => "Praga"
            ],
            [
                'preguntas_quantes_saps_id' => '8',
                'resposta' => "Bolonia"
            ],
            [
                'preguntas_quantes_saps_id' => '8',
                'resposta' => "Montpellier"
            ],
            [
                'preguntas_quantes_saps_id' => '8',
                'resposta' => "Coimbra"
            ],
            [
                'preguntas_quantes_saps_id' => '8',
                'resposta' => "Heidelberg"
            ],
            [
                'preguntas_quantes_saps_id' => '8',
                'resposta' => "Amsterdam"
            ],
            [
                'preguntas_quantes_saps_id' => '8',
                'resposta' => "Cracovia"
            ],
            [
                'preguntas_quantes_saps_id' => '8',
                'resposta' => "Budapest"
            ],
            [
                'preguntas_quantes_saps_id' => '8',
                'resposta' => "Cardiff"
            ],
            [
                'preguntas_quantes_saps_id' => '8',
                'resposta' => "Lovaina"
            ],
            [
                'preguntas_quantes_saps_id' => '9',
                'resposta' => "Saturno devorando a su hijo - Goya"
            ],
            [
                'preguntas_quantes_saps_id' => '9',
                'resposta' => "La maja desnuda - Goya"
            ],
            [
                'preguntas_quantes_saps_id' => '9',
                'resposta' => "Las 3 gracias - Rubens"
            ],
            [
                'preguntas_quantes_saps_id' => '9',
                'resposta' => "La crucifixión - Juan de flandes"
            ],
            [
                'preguntas_quantes_saps_id' => '9',
                'resposta' => "Las Meninas - Velázquez"
            ],
            [
                'preguntas_quantes_saps_id' => '9',
                'resposta' => "El Descendimiento - Van der Weyden"
            ],
            [
                'preguntas_quantes_saps_id' => '9',
                'resposta' => "El 3 de Mayo o Los Fusilamientos - goya"
            ],
            [
                'preguntas_quantes_saps_id' => '9',
                'resposta' => "La Anunciación - Fra Angélico"
            ],
            [
                'preguntas_quantes_saps_id' => '9',
                'resposta' => "El jardín de las delicias - El Bosco"
            ],
            [
                'preguntas_quantes_saps_id' => '9',
                'resposta' => "Autorretrato - Alberto Durero"
            ],
            [
                'preguntas_quantes_saps_id' => '10',
                'resposta' => "Col. La Salle"
            ],
            [
                'preguntas_quantes_saps_id' => '10',
                'resposta' => "Col. Sant Josep"
            ],
            [
                'preguntas_quantes_saps_id' => '10',
                'resposta' => "Esc. Puigcerver"
            ],
            [
                'preguntas_quantes_saps_id' => '10',
                'resposta' => "Institució Espai Aura"
            ],
            [
                'preguntas_quantes_saps_id' => '10',
                'resposta' => "Inst. Baix Camp"
            ],
            [
                'preguntas_quantes_saps_id' => '10',
                'resposta' => "Inst. Doménech i Montaner"
            ],
            [
                'preguntas_quantes_saps_id' => '10',
                'resposta' => "Inst. Gabriel Ferrater"
            ],
            [
                'preguntas_quantes_saps_id' => '10',
                'resposta' => "Inst. Gaudí"
            ],
            [
                'preguntas_quantes_saps_id' => '10',
                'resposta' => "Inst. Roseta Mauri"
            ],
            [
                'preguntas_quantes_saps_id' => '10',
                'resposta' => "Inst. Salvador Vilaseca"
            ],
            [
                'preguntas_quantes_saps_id' => '11',
                'resposta' => "La presentació"
            ],
            [
                'preguntas_quantes_saps_id' => '11',
                'resposta' => "La salle"
            ],
            [
                'preguntas_quantes_saps_id' => '11',
                'resposta' => "Maria Rosa Molas"
            ],
            [
                'preguntas_quantes_saps_id' => '11',
                'resposta' => "Pare Manyanet"
            ],
            [
                'preguntas_quantes_saps_id' => '11',
                'resposta' => "Sant Josep"
            ],
            [
                'preguntas_quantes_saps_id' => '11',
                'resposta' => "Sant Pau"
            ],
            [
                'preguntas_quantes_saps_id' => '11',
                'resposta' => "ARCE"
            ],
            [
                'preguntas_quantes_saps_id' => '11',
                'resposta' => "Maria Cortina"
            ],
            [
                'preguntas_quantes_saps_id' => '11',
                'resposta' => "Puigcerver"
            ],
            [
                'preguntas_quantes_saps_id' => '11',
                'resposta' => "Espai Aura"
            ],
            [
                'preguntas_quantes_saps_id' => '12',
                'resposta' => "Oques"
            ],
            [
                'preguntas_quantes_saps_id' => '12',
                'resposta' => "Baluard"
            ],
            [
                'preguntas_quantes_saps_id' => '12',
                'resposta' => "Llibertat"
            ],
            [
                'preguntas_quantes_saps_id' => '12',
                'resposta' => "Pastoreta"
            ],
            [
                'preguntas_quantes_saps_id' => '12',
                'resposta' => "Psg. Prim"
            ],
            [
                'preguntas_quantes_saps_id' => '12',
                'resposta' => "St. Ferran"
            ],
            [
                'preguntas_quantes_saps_id' => '12',
                'resposta' => "Carrilet"
            ],
            [
                'preguntas_quantes_saps_id' => '12',
                'resposta' => "La Fira"
            ],
            [
                'preguntas_quantes_saps_id' => '12',
                'resposta' => "Hospital St.Joan"
            ],
            [
                'preguntas_quantes_saps_id' => '12',
                'resposta' => "Tecnoparc"
            ],
            [
                'preguntas_quantes_saps_id' => '13',
                'resposta' => "Fotruny"
            ],
            [
                'preguntas_quantes_saps_id' => '13',
                'resposta' => "Bartrina"
            ],
            [
                'preguntas_quantes_saps_id' => '13',
                'resposta' => "Orfeó reusenc"
            ],
            [
                'preguntas_quantes_saps_id' => '13',
                'resposta' => "Santa Llúcia"
            ],
            [
                'preguntas_quantes_saps_id' => '13',
                'resposta' => "Brávium"
            ],
            [
                'preguntas_quantes_saps_id' => '13',
                'resposta' => "La Palma"
            ],
            [
                'preguntas_quantes_saps_id' => '13',
                'resposta' => "Cal Massó"
            ],
            [
                'preguntas_quantes_saps_id' => '13',
                'resposta' => "Teatre de l'Institut Baix Camp"
            ],
            [
                'preguntas_quantes_saps_id' => '13',
                'resposta' => "Teatre de la Salle"
            ],
            [
                'preguntas_quantes_saps_id' => '14',
                'resposta' => "Vila-seca"
            ],
            [
                'preguntas_quantes_saps_id' => '14',
                'resposta' => "La Canonja"
            ],
            [
                'preguntas_quantes_saps_id' => '14',
                'resposta' => "Tarragona"
            ],
            [
                'preguntas_quantes_saps_id' => '14',
                'resposta' => "Constantí"
            ],
            [
                'preguntas_quantes_saps_id' => '14',
                'resposta' => "La Selva del camp"
            ],
            [
                'preguntas_quantes_saps_id' => '14',
                'resposta' => "Castellvell del camp"
            ],
            [
                'preguntas_quantes_saps_id' => '14',
                'resposta' => "Riudoms"
            ],
            [
                'preguntas_quantes_saps_id' => '14',
                'resposta' => "Almoster"
            ],
            [
                'preguntas_quantes_saps_id' => '14',
                'resposta' => "Aleixar"
            ],
            [
                'preguntas_quantes_saps_id' => '15',
                'resposta' => "Sean Connery"
            ],
            [
                'preguntas_quantes_saps_id' => '15',
                'resposta' => "Roger Moore"
            ],
            [
                'preguntas_quantes_saps_id' => '15',
                'resposta' => "Pierce Brosnan"
            ],
            [
                'preguntas_quantes_saps_id' => '15',
                'resposta' => "Daniel Craig"
            ],
            [
                'preguntas_quantes_saps_id' => '15',
                'resposta' => "George Lazenby"
            ],
            [
                'preguntas_quantes_saps_id' => '15',
                'resposta' => "Timothy Dalton"
            ],
            [
                'preguntas_quantes_saps_id' => '16',
                'resposta' => "Piminentos del piquillo"
            ],
            [
                'preguntas_quantes_saps_id' => '16',
                'resposta' => "Bacalao"
            ],
            [
                'preguntas_quantes_saps_id' => '16',
                'resposta' => "Cebolla"
            ],
            [
                'preguntas_quantes_saps_id' => '16',
                'resposta' => "Ajo"
            ],
            [
                'preguntas_quantes_saps_id' => '16',
                'resposta' => "Harina"
            ],
            [
                'preguntas_quantes_saps_id' => '16',
                'resposta' => "Leche"
            ],
            [
                'preguntas_quantes_saps_id' => '16',
                'resposta' => "Aceite"
            ],
            [
                'preguntas_quantes_saps_id' => '16',
                'resposta' => "Nata Líquida"
            ],
            [
                'preguntas_quantes_saps_id' => '16',
                'resposta' => "Gamba"
            ],
            [
                'preguntas_quantes_saps_id' => '16',
                'resposta' => "sal"
            ],
            [
                'preguntas_quantes_saps_id' => '17',
                'resposta' => "Apple"
            ],
            [
                'preguntas_quantes_saps_id' => '17',
                'resposta' => "Microsoft"
            ],
            [
                'preguntas_quantes_saps_id' => '17',
                'resposta' => "Alphabet"
            ],
            [
                'preguntas_quantes_saps_id' => '17',
                'resposta' => "Amazon"
            ],
            [
                'preguntas_quantes_saps_id' => '17',
                'resposta' => "Meta (facebook)"
            ],
            [
                'preguntas_quantes_saps_id' => '17',
                'resposta' => "TSMC"
            ],
            [
                'preguntas_quantes_saps_id' => '17',
                'resposta' => "Nvidia"
            ],
            [
                'preguntas_quantes_saps_id' => '17',
                'resposta' => "Tencent"
            ],
            [
                'preguntas_quantes_saps_id' => '17',
                'resposta' => "Samsung"
            ],
            [
                'preguntas_quantes_saps_id' => '17',
                'resposta' => "Alibaba Group"
            ],
            [
                'preguntas_quantes_saps_id' => '18',
                'resposta' => "Samsung"
            ],
            [
                'preguntas_quantes_saps_id' => '18',
                'resposta' => "Xiaomi"
            ],
            [
                'preguntas_quantes_saps_id' => '18',
                'resposta' => "Apple"
            ],
            [
                'preguntas_quantes_saps_id' => '18',
                'resposta' => "OPPO"
            ],
            [
                'preguntas_quantes_saps_id' => '18',
                'resposta' => "realme"
            ],
            [
                'preguntas_quantes_saps_id' => '19',
                'resposta' => "Facebook"
            ],
            [
                'preguntas_quantes_saps_id' => '19',
                'resposta' => "Whatsapp"
            ],
            [
                'preguntas_quantes_saps_id' => '19',
                'resposta' => "Youtube"
            ],
            [
                'preguntas_quantes_saps_id' => '19',
                'resposta' => "Instagram"
            ],
            [
                'preguntas_quantes_saps_id' => '19',
                'resposta' => "TikTok"
            ],
            [
                'preguntas_quantes_saps_id' => '19',
                'resposta' => "LinkedIn"
            ],
            [
                'preguntas_quantes_saps_id' => '19',
                'resposta' => "Twitter"
            ],
            [
                'preguntas_quantes_saps_id' => '19',
                'resposta' => "Pinterest"
            ],
            [
                'preguntas_quantes_saps_id' => '20',
                'resposta' => "Abeto - Avet"
            ],
            [
                'preguntas_quantes_saps_id' => '20',
                'resposta' => "Cedro"
            ],
            [
                'preguntas_quantes_saps_id' => '20',
                'resposta' => "Pino"
            ],
            [
                'preguntas_quantes_saps_id' => '20',
                'resposta' => "Sauce - Salze"
            ],
            [
                'preguntas_quantes_saps_id' => '20',
                'resposta' => "Chopo - Pollancre"
            ],
            [
                'preguntas_quantes_saps_id' => '20',
                'resposta' => "Platano - Plataner"
            ],
            [
                'preguntas_quantes_saps_id' => '20',
                'resposta' => "Olmo - Om"
            ],
            [
                'preguntas_quantes_saps_id' => '20',
                'resposta' => "Acacia"
            ],
            [
                'preguntas_quantes_saps_id' => '20',
                'resposta' => "Ciprés"
            ],
            [
                'preguntas_quantes_saps_id' => '20',
                'resposta' => "Encina - Alzina"
            ],
            [
                'preguntas_quantes_saps_id' => '20',
                'resposta' => "Prunus"
            ],
            [
                'preguntas_quantes_saps_id' => '21',
                'resposta' => "Iceberg"
            ],
            [
                'preguntas_quantes_saps_id' => '21',
                'resposta' => "Romana"
            ],
            [
                'preguntas_quantes_saps_id' => '21',
                'resposta' => "Batavia"
            ],
            [
                'preguntas_quantes_saps_id' => '21',
                'resposta' => "Trocadero"
            ],
            [
                'preguntas_quantes_saps_id' => '21',
                'resposta' => "Fulla de Roure"
            ],
            [
                'preguntas_quantes_saps_id' => '21',
                'resposta' => "Lollo Rosa o Rosso"
            ],
            [
                'preguntas_quantes_saps_id' => '21',
                'resposta' => "Maravilla"
            ],
            [
                'preguntas_quantes_saps_id' => '21',
                'resposta' => "Radicchio"
            ],
            [
                'preguntas_quantes_saps_id' => '21',
                'resposta' => "Escarola"
            ],
            [
                'preguntas_quantes_saps_id' => '21',
                'resposta' => "Canónigos"
            ],
            [
                'preguntas_quantes_saps_id' => '21',
                'resposta' => "Endibias"
            ],
            [
                'preguntas_quantes_saps_id' => '21',
                'resposta' => "Cogollos de Tudela"
            ],
            [
                'preguntas_quantes_saps_id' => '21',
                'resposta' => "Rúcula"
            ],
            [
                'preguntas_quantes_saps_id' => '22',
                'resposta' => "La milla verde"
            ],
            [
                'preguntas_quantes_saps_id' => '22',
                'resposta' => "La torre oscura"
            ],
            [
                'preguntas_quantes_saps_id' => '22',
                'resposta' => "Apocalipsis"
            ],
            [
                'preguntas_quantes_saps_id' => '22',
                'resposta' => "El misterio de Salem's Lot"
            ],
            [
                'preguntas_quantes_saps_id' => '22',
                'resposta' => "Misery"
            ],
            [
                'preguntas_quantes_saps_id' => '22',
                'resposta' => "Cementerio de animales"
            ],
            [
                'preguntas_quantes_saps_id' => '22',
                'resposta' => "Carrie"
            ],
            [
                'preguntas_quantes_saps_id' => '22',
                'resposta' => "It"
            ],
            [
                'preguntas_quantes_saps_id' => '22',
                'resposta' => "El resplandor"
            ],
            [
                'preguntas_quantes_saps_id' => '23',
                'resposta' => "La conversación"
            ],
            [
                'preguntas_quantes_saps_id' => '23',
                'resposta' => "El fugitivo"
            ],
            [
                'preguntas_quantes_saps_id' => '23',
                'resposta' => "El despertar de la fuerza"
            ],
            [
                'preguntas_quantes_saps_id' => '23',
                'resposta' => "Blade Runner 2049"
            ],
            [
                'preguntas_quantes_saps_id' => '23',
                'resposta' => "Blade Runner"
            ],
            [
                'preguntas_quantes_saps_id' => '23',
                'resposta' => "Indiana Jones y la última cruzada"
            ],
            [
                'preguntas_quantes_saps_id' => '23',
                'resposta' => "El retorno del Jedi"
            ],
            [
                'preguntas_quantes_saps_id' => '23',
                'resposta' => "En busca del arca perdida"
            ],
            [
                'preguntas_quantes_saps_id' => '23',
                'resposta' => "Apocalypse now"
            ],
            [
                'preguntas_quantes_saps_id' => '23',
                'resposta' => "Una nueva esperanza"
            ],
            [
                'preguntas_quantes_saps_id' => '23',
                'resposta' => "El imperio contraataca"
            ],
            [
                'preguntas_quantes_saps_id' => '24',
                'resposta' => "Pies descalzos"
            ],
            [
                'preguntas_quantes_saps_id' => '24',
                'resposta' => "Hips don't lie"
            ],
            [
                'preguntas_quantes_saps_id' => '24',
                'resposta' => "Waka-Waka"
            ],
            [
                'preguntas_quantes_saps_id' => '24',
                'resposta' => "Ciega,sordomuda"
            ],
            [
                'preguntas_quantes_saps_id' => '24',
                'resposta' => "Si te vas"
            ],
            [
                'preguntas_quantes_saps_id' => '24',
                'resposta' => "Loba"
            ],
            [
                'preguntas_quantes_saps_id' => '24',
                'resposta' => "La pared"
            ],
            [
                'preguntas_quantes_saps_id' => '24',
                'resposta' => "Suerte"
            ],
            [
                'preguntas_quantes_saps_id' => '24',
                'resposta' => "La tortura"
            ],
            [
                'preguntas_quantes_saps_id' => '24',
                'resposta' => "Inevitable"
            ],
            [
                'preguntas_quantes_saps_id' => '25',
                'resposta' => "San Petersburgo 5.4M"
            ],
            [
                'preguntas_quantes_saps_id' => '25',
                'resposta' => "Barcelona"
            ],
            [
                'preguntas_quantes_saps_id' => '25',
                'resposta' => "Madrid"
            ],
            [
                'preguntas_quantes_saps_id' => '25',
                'resposta' => "Londres"
            ],
            [
                'preguntas_quantes_saps_id' => '25',
                'resposta' => "Paris"
            ],
            [
                'preguntas_quantes_saps_id' => '25',
                'resposta' => "Moscú"
            ],
            [
                'preguntas_quantes_saps_id' => '25',
                'resposta' => "Estambul"
            ],
            [
                'preguntas_quantes_saps_id' => '26',
                'resposta' => "Australia"
            ],
            [
                'preguntas_quantes_saps_id' => '26',
                'resposta' => "Indonesia"
            ],
            [
                'preguntas_quantes_saps_id' => '26',
                'resposta' => "Rusia"
            ],
            [
                'preguntas_quantes_saps_id' => '26',
                'resposta' => "Estats Units"
            ],
            [
                'preguntas_quantes_saps_id' => '26',
                'resposta' => "Canadá"
            ],
            [
                'preguntas_quantes_saps_id' => '26',
                'resposta' => "Sudáfrica"
            ],
            [
                'preguntas_quantes_saps_id' => '26',
                'resposta' => "Colombia"
            ],
            [
                'preguntas_quantes_saps_id' => '26',
                'resposta' => "Mongolia"
            ],
            [
                'preguntas_quantes_saps_id' => '26',
                'resposta' => "Países Bajos"
            ],
            [
                'preguntas_quantes_saps_id' => '26',
                'resposta' => "Polonia"
            ],
            [
                'preguntas_quantes_saps_id' => '27',
                'resposta' => "España"
            ],
            [
                'preguntas_quantes_saps_id' => '27',
                'resposta' => "Francia"
            ],
            [
                'preguntas_quantes_saps_id' => '27',
                'resposta' => "China"
            ],
            [
                'preguntas_quantes_saps_id' => '27',
                'resposta' => "Italia"
            ],
            [
                'preguntas_quantes_saps_id' => '27',
                'resposta' => "Turquía"
            ],
            [
                'preguntas_quantes_saps_id' => '27',
                'resposta' => "Estats Units"
            ],
            [
                'preguntas_quantes_saps_id' => '27',
                'resposta' => "Argentina"
            ],
            [
                'preguntas_quantes_saps_id' => '27',
                'resposta' => "Chile"
            ],
            [
                'preguntas_quantes_saps_id' => '27',
                'resposta' => "Portugal"
            ],
            [
                'preguntas_quantes_saps_id' => '27',
                'resposta' => "Rumania"
            ],
            [
                'preguntas_quantes_saps_id' => '28',
                'resposta' => "China"
            ],
            [
                'preguntas_quantes_saps_id' => '28',
                'resposta' => "Rusia"
            ],
            [
                'preguntas_quantes_saps_id' => '28',
                'resposta' => "India"
            ],
            [
                'preguntas_quantes_saps_id' => '28',
                'resposta' => "Polonia"
            ],
            [
                'preguntas_quantes_saps_id' => '28',
                'resposta' => "Estats Units"
            ],
            [
                'preguntas_quantes_saps_id' => '28',
                'resposta' => "Ucrania"
            ],
            [
                'preguntas_quantes_saps_id' => '28',
                'resposta' => "Alemania"
            ],
            [
                'preguntas_quantes_saps_id' => '28',
                'resposta' => "Países Bajos"
            ],
            [
                'preguntas_quantes_saps_id' => '28',
                'resposta' => "Bielorrusia"
            ],
            [
                'preguntas_quantes_saps_id' => '29',
                'resposta' => "Espanya"
            ],
            [
                'preguntas_quantes_saps_id' => '29',
                'resposta' => "Portugal"
            ],
            [
                'preguntas_quantes_saps_id' => '29',
                'resposta' => "Alemania"
            ],
            [
                'preguntas_quantes_saps_id' => '29',
                'resposta' => "Regne Unit"
            ],
            [
                'preguntas_quantes_saps_id' => '29',
                'resposta' => "Nova Zelanda"
            ],
            [
                'preguntas_quantes_saps_id' => '29',
                'resposta' => "Países Bajos"
            ],
            [
                'preguntas_quantes_saps_id' => '29',
                'resposta' => "Chile"
            ]


        ];

        RespostesQuantesSaps::insert($data);
    }
}
