<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntasQuantesSapsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas_quantes_saps')->insert([
            [
                'pregunta' => "Ingredients necesaris per elaborar la paella valenciana, recepta tradicional",
                'titul' => "I pa' mi que?",
                'font' => "directoalpaladar.com"
            ],
            [
                'pregunta' => "Guanyadors d'almenys 3 trofeus MVP De la NBA",
                'titul' => "Aquí hi ha molta altura",
                'font' => "wikipedia.org"
            ],
            [
                'pregunta' => "Les millors cançons d'ABBA",
                'titul' => "Quatre suecs",
                'font' => "rankuzz.com"
            ],
            [
                'pregunta' => "Les millors cadenes de supermercat",
                'titul' => "I tu on compres?",
                'font' => "20minutos.es"
            ],
            [
                'pregunta' => "Cançons més famoses de Rolling Stones",
                'titul' => "Roques antigues",
                'font' => "entradas.com"
            ],
            [
                'pregunta' => "Les millors varietats de pomes que existeixen",
                'titul' => "Newton se la sap!",
                'font' => "comefruta.es"
            ],
            [
                'pregunta' => "Els principals i més importants rius d'Espanya",
                'titul' => "Només si plou!",
                'font' => "fundacionaquae.org"
            ],
            [
                'pregunta' => "Destins amb encant preferits pels estudiants d'Erasmus 2020 (ciutats)",
                'titul' => "Llibreta, boli i maleta",
                'font' => "isic.es"
            ],
            [
                'pregunta' => "Obres imprescindibles per veure al museu El Prado de Madrid",
                'titul' => "La vestida no interessa",
                'font' => "travesiasdigital.com"
            ],
            [
                'pregunta' => "Centres on estudiar Batxillerat a Reus",
                'titul' => "De bat a bat",
                'font' => "reus.cat"
            ],
            [
                'pregunta' => "Centres d'educació infantil i primària concertats de Reus",
                'titul' => "Els més pijillus",
                'font' => "reus.cat"
            ],
            [
                'pregunta' => "Els pàrquings municipals de Reus",
                'titul' => "Anem de Shopping?",
                'font' => "reus.cat"
            ],
            [
                'pregunta' => "Els teatres de Reus",
                'titul' => "Ser o no ser?",
                'font' => "teatresdereus.cat"
            ],
            [
                'pregunta' => "Municipis fronterers amb Reus",
                'titul' => "Limítrofs",
                'font' => "enciclopedia.cat"
            ],
            [
                'pregunta' => "Millors actors que han interpretat James Bond",
                'titul' => "Llicéncia per matar",
                'font' => "wikipedia.org"
            ],
            [
                'pregunta' => "Ingredients necesaris per preparar 'Pimientos rellenos de bacalao y gambas'",
                'titul' => "Quins pebrots!",
                'font' => "directoalpaladar.com"
            ],
            [
                'pregunta' => "Les empreses tecnológiques més grans del món",
                'titul' => "Silicon Valley",
                'font' => "es.fxssi.com"
            ],
            [
                'pregunta' => "Marques de telefons móvils més venuts a Espanya 2022",
                'titul' => "Truque'm després",
                'font' => "anovo.es"
            ],
            [
                'pregunta' => "Les reds socials més utilitzades",
                'titul' => "Forats Negres",
                'font' => "iebschool.com"
            ],
            [
                'pregunta' => "Arbres més comuns als boscs espanyols",
                'titul' => "Llenya al mono",
                'font' => "ajardina.es"
            ],
            [
                'pregunta' => "Tipus d'enciams més consumits en espanya",
                'titul' => "Com a cunills",
                'font' => "cocina-casera.com"
            ],
            [
                'pregunta' => "Llibres més venuts de Stephen King",
                'titul' => "Una de por",
                'font' => "revistagq.com"
            ],
            [
                'pregunta' => "Les millors películes de Harrison Ford",
                'titul' => "Solo Ford",
                'font' => "hobbyconsolas.com"
            ],
            [
                'pregunta' => "Les millors cançons de Shakira",
                'titul' => "Pobre Piqué",
                'font' => "stubhub.es"
            ],
            [
                'pregunta' => "Ciutats del continent europeu amb més de 5 millons d'habitants",
                'titul' => "Molta gent",
                'font' => "proyectotierra.org"
            ],
            [
                'pregunta' => "Ranking mundial de països més exportadors de carbó 2021",
                'titul' => "I que caga el tió?",
                'font' => "statista.com"
            ],
            [
                'pregunta' => "Principals països productors de Vi",
                'titul' => "Bacco estará content",
                'font' => "guarda14.com"
            ],
            [
                'pregunta' => "Principals països productors de Patates",
                'titul' => "I les de Prades?",
                'font' => "yara.es"
            ],
            [
                'pregunta' => "Països amb, almenys, un 20% de producció eléctrica basada en eólica y solar (2021)",
                'titul' => "19 ja no val",
                'font' => "datos.enerdata.net"
            ]
        ]);
    }
}
