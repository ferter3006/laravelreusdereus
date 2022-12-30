<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntasDonemElNumeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('preguntas_donam_el_numeros')->insert([
            [
                'pregunta' => 'Quants kilómetres hi ha de reus al mar?',
                'resposta' => '10 Km',
                'font' => 'Wikipedia'
            ],

            [
                'pregunta' => "Quants miles d'habitats té Reus?",
                'resposta' => "106 mil",
                'font' => 'Wikipedia'
            ],
            [
                'pregunta' => "Quants rius atravessen Reus?",
                'resposta' => "0",
                'font' => 'Wikipedia'
            ],
            [
                'pregunta' => "Quina és la altitud máxima que podem trobar a Reus? En metres (sobre el nivell del mar)",
                'resposta' => "180",
                'font' => 'Wikipedia'
            ],
            [
                'pregunta' => "Quina és la temperatura mínima que s'ha registrat mai a Reus? (febrer del 1983)",
                'resposta' => "-8 graus",
                'font' => 'Wikipedia'
            ],
            [
                'pregunta' => "Quin percentatge de població reusenca són extrangers?",
                'resposta' => "8%",
                'font' => 'Wikipedia'
            ],
            [
                'pregunta' => "Quants alcaldes ha tingut Reus els últims 20 anys ?",
                'resposta' => "2 (Perez i Pellicer)",
                'font' => 'Wikipedia'
            ],
            [
                'pregunta' => "Quin día de juny es celebra Sant Pere, festa major de Reus?",
                'resposta' => "29 de Juny",
                'font' => 'Wikipedia'
            ],
            [
                'pregunta' => "Quin día de Setembre es celebra Misericórdia, festa major de Reus?",
                'resposta' => "25 de Setembre",
                'font' => 'Wikipedia'
            ],
            [
                'pregunta' => "Quin any es va crear la Universitat Rovira i Virgili de reus?",
                'resposta' => "1991",
                'font' => 'Wikipedia'
            ],
            [
                'pregunta' => "Quin any es va començar a construir la Casa Navás de Reus?",
                'resposta' => "1901",
                'font' => 'Wikipedia'
            ],
            [
                'pregunta' => "Quin any es va començar a construir l'institut Pere Mata de Reus?",
                'resposta' => "1899",
                'font' => 'Wikipedia'
            ],
            [
                'pregunta' => "Quantes esglésies católiques hi ha a Reus?",
                'resposta' => "10",
                'font' => 'Wikipedia'
            ],
            [
                'pregunta' => "Quants campionats mundials d'hoquei patins ha guanyat el Reus Deportiu?",
                'resposta' => "1",
                'font' => 'Wikipedia'
            ],
            [
                'pregunta' => "Quantes copes d'europa ha guanyat el Reus deportiu d'Hoquei patins?",
                'resposta' => "8",
                'font' => 'Wikipedia'
            ],
            [
                'pregunta' => "Quantes temporades a jugat el Reus deportiu de futbol a la primera divisió?",
                'resposta' => "0",
                'font' => "Wikipedia"
            ],
            [
                'pregunta' => "Arrodonint, quants metres quadrats de superfície té el mercat central de Reus?",
                'resposta' => "4.000 m2",
                'font' => "Reus.cat"
            ],
            [
                'pregunta' => "Quantes parades té el mercat central de reus?",
                'resposta' => "127",
                'font' => "Reus.cat"
            ],
            [
                'pregunta' => "Quants mercats municipals té Reus?",
                'resposta' => "4",
                'font' => "Reus.cat"
            ],
            [
                'pregunta' => "Quants municipis tenen frontera amb Reus?",
                'resposta' => "9",
                'font' => "enciclipedia.cat"
            ],
            [
                'pregunta' => "Quants municipis hi ha a la provincia de Tarragona?",
                'resposta' => "183",
                'font' => "Wikipedia"
            ],
            [
                'pregunta' => "Quantes comarques hi ha a Catalunya?",
                'resposta' => "41",
                'font' => "gencat.cat"
            ],
            [
                'pregunta' => "Quants municipis hi ha a Catalunya?",
                'resposta' => "946",
                'font' => "gencat.cat"
            ],
            [
                'pregunta' => "Arrodonint, quants kilómetres de platjes hi ha a Catalunya?",
                'resposta' => "340 Km",
                'font' => "lavanguardia.com"
            ],
            [
                'pregunta' => "Quin any va començar la 1era guerra mundial?",
                'resposta' => "1914",
                'font' => "Wikipedia"
            ],
            [
                'pregunta' => "Quin any va començar la 2na guerra mundial?",
                'resposta' => "1939",
                'font' => "Wikipedia"
            ],
            [
                'pregunta' => "A quants kilómetres de distancia está la Terra respecte del Sol?",
                'resposta' => "150 millons de km",
                'font' => "inta.es"
            ],
            [
                'pregunta' => "A quants Km/s viatja la llum?",
                'resposta' => "300.000 km/s",
                'font' => "Wikipedia"
            ],
            [
                'pregunta' => "Arrodonint, Quants Km medeix el diámetre de la terra ?",
                'resposta' => "13.000 Km",
                'font' => "Wikipedia"
            ],
            [
                'pregunta' => "Quantes voltes dona la terra alrededor del Sol en 1 any?",
                'resposta' => "1",
                'font' => "ferter.com xD"
            ],
            [
                'pregunta' => "Quantes dents té un ser humá adult?",
                'resposta' => "32",
                'font' => "Wikipedia"
            ],
            [
                'pregunta' => "Quants óssos té el cos humá?",
                'resposta' => "206",
                'font' => "kidshealth.org"
            ],
            [
                'pregunta' => "Quants músculs té le cos humá?",
                'resposta' => "840",
                'font' => "ifema.es"
            ],
            [
                'pregunta' => "Quants kilómetres hi ha a peu de Reus a Prades?",
                'resposta' => "25 km",
                'font' => "wikiloc.com"
            ],
            [
                'pregunta' => "Arrodonint, Quants Km hi ha a peu de Reus a Maspujols?",
                'resposta' => "8 Km",
                'font' => "wikiloc.com"
            ],
            [
                'pregunta' => "Quants Gegants té la ciutat de Reus?",
                'resposta' => "11",
                'font' => "Wikipedia"
            ],
            [
                'pregunta' => "Quantes raçes de gos existeixen?",
                'resposta' => "350",
                'font' => "championdog.com"
            ],
            [
                'pregunta' => "Arrodonint, Quants gossos hi ha a Espanya?",
                'resposta' => "7 millones",
                'font' => "wamiz.es"
            ],
            [
                'pregunta' => "Quantes tipus de vitamines es pot trobar al cos humá?",
                'resposta' => "13",
                'font' => "Wikipedia"
            ],
            [
                'pregunta' => "Quants metres d'altura té el Mont Caro? (la muntanya més alta de Tarragona)",
                'resposta' => "1.441 m",
                'font' => "google.com"
            ],
            [
                'pregunta' => "Quants metres d'altura té el Tossal de la Baltasana? (la muntanya més alta del Baix Camp",
                'resposta' => "1.203 m",
                'font' => "google.com"
            ],
            [
                'pregunta' => "Quantes escoles d'educació infantil i primària hi ha a Reus?",
                'resposta' => "30",
                'font' => "reus.cat"
            ],
            [
                'pregunta' => "Quants centres diferents donen classes de la ESO a Reus?",
                'resposta' => "16",
                'font' => "reus.cat"
            ],
            [
                'pregunta' => "En quants centres diferents pots estudiar Batxillerat a Reus?",
                'resposta' => "10",
                'font' => "reus.cat"
            ],
            [
                'pregunta' => "Quantes universitats o facultats pots trobar a la ciutat de Reus?",
                'resposta' => "6",
                'font' => "reus.cat"
            ],
            [
                'pregunta' => "Quantes plaçes de parquing sumen entre tots els parquings municipals de Reus?",
                'resposta' => "4.440",
                'font' => "reus.cat"
            ],
            [
                'pregunta' => "Quants kilómetres de carril bici té Reus?",
                'resposta' => "20 km",
                'font' => "reus.cat"
            ],
            [
                'pregunta' => "Quantes líneas de autobús té Reus?",
                'resposta' => "10",
                'font' => "reustransport.cat"
            ],
            [
                'pregunta' => "Quina es l'altura en metres de l'Everest?",
                'resposta' => "8.849",
                'font' => "google.com"
            ],
            [
                'pregunta' => "Quantes pilotes d'or té Lionel Messi?",
                'resposta' => "7",
                'font' => "dazn.com"
            ],
            [
                'pregunta' => "Quantes pilotes d'or va guanyar Pep Guardiola com a jugador?",
                'resposta' => "0",
                'font' => "ferter.com xD"
            ],
            [
                'pregunta' => "Quantes pilotes d'or ha guanyat Alexia Putelles?",
                'resposta' => "2",
                'font' => "fcbarcelona.com"
            ],
            [
                'pregunta' => "Quants anells de la NBA va guanyar Michael Jordan?",
                'resposta' => "6",
                'font' => "Wikipedia"
            ],
            [
                'pregunta' => "Quants campeonats de la NBA sumen els germans Gasol?",
                'resposta' => "3",
                'font' => "olympics.com"
            ],
            [
                'pregunta' => "Quants Grand Slams ha guanyat Roger Federer?",
                'resposta' => "20",
                'font' => "dazn.com"
            ],
            [
                'pregunta' => "Quans països diferents han guanyat el campeonat mundial de Basquet?",
                'resposta' => "6",
                'font' => "marca.com"
            ],
            [
                'pregunta' => "Quants nanos-capgrossos-cabezóns té Reus?",
                'resposta' => "10",
                'font' => "elsnanos.com"
            ],
            [
                'pregunta' => "Quantes vivendes hi ha a Reus?",
                'resposta' => "50.000",
                'font' => "idescat.cat"
            ],
            [
                'pregunta' => "Quants metres de llarg fa una piscina Olímpica?",
                'resposta' => "50",
                'font' => "Wikipedia"
            ],
            [
                'pregunta' => "Quants carrils aprofitables té una piscina Olímpica?",
                'resposta' => "8",
                'font' => "as.com"
            ],
            [
                'pregunta' => "Quantes llunes té Jupiter?",
                'resposta' => "79",
                'font' => "spaceplace.nasa.gov"
            ],
            [
                'pregunta' => "Quants dies tarda la lluna en donar una volta a la Terra?",
                'resposta' => "28 dies",
                'font' => "Wikipedia"
            ],
            [
                'pregunta' => "Quants Bits son un Byte?",
                'resposta' => "8",
                'font' => "google.com"
            ],
            [
                'pregunta' => "Quants Bytes son un Megabyte?",
                'resposta' => "1.000.000",
                'font' => "google.com"
            ],
            [
                'pregunta' => "Quin és l'aforament del Teatre Bartina de Reus?",
                'resposta' => "459",
                'font' => "teatrebartrina.cat"
            ],
            [
                'pregunta' => "Quin és l'aforament del Teatre Fortuny de Reus?",
                'resposta' => "807",
                'font' => "teatrefortuny.cat"
            ],
            [
                'pregunta' => "Arrodonint, Quants habitants té Maspujols?",
                'resposta' => "800",
                'font' => "idescat.cat"
            ],
            [
                'pregunta' => "Quants habitants té Salou?",
                'resposta' => "28.500",
                'font' => "Wikipedia"
            ],
            [
                'pregunta' => "En quin any es va construir el Parc Sant Jordi de Reus?",
                'resposta' => "1979",
                'font' => "reus.cat"
            ],
            [
                'pregunta' => "Quin és el número atómic del carbono?",
                'resposta' => "6",
                'font' => "Wikipedia"
            ],
            [
                'pregunta' => "Quin és el número atómic de l'oxigen?",
                'resposta' => "8",
                'font' => "Wikipedia"
            ],
            [
                'pregunta' => "Quants elements hi ha a la taula periódica?",
                'resposta' => "118",
                'font' => "nationalgeographic.com"
            ],
            [
                'pregunta' => "Quants díes d'incubació necesita un pavito dins l'ou per neixer?",
                'resposta' => "28",
                'font' => "pasreform.com"
            ],
            [
                'pregunta' => "Quants mesos dura l'embazaç d'un elefant africá?",
                'resposta' => "22 mesos",
                'font' => "bbc.com"
            ],
            [
                'pregunta' => "Quants díes d'incubació necesita un pollito dins l'ou per neixer?",
                'resposta' => "21",
                'font' => "pasreform.com"
            ],
            [
                'pregunta' => "Quina altura mitjana pot fer una Girafa adulta?",
                'resposta' => "5 metres",
                'font' => "okdiario.com"
            ]
        ]);
    }
}
