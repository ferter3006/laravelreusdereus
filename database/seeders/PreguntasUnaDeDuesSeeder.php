<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntasUnaDeDuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas_una_de_dues')->insert([
            [
                'pregunta' => 'Qui va dirigir la película Ben-Hur?',
                'resposta1' => "William Wyler",
                'resposta2' => "Denis Hopper",
                'resposta3' => "Paris Hilton",
                'font' => "wikipedia"
            ],
            [
                'pregunta' => 'Qui va compondre la BSO de Star Wars?',
                'resposta1' => "John Williams",
                'resposta2' => "Danny Elfman",
                'resposta3' => "King Africa",
                'font' => "wikipedia"
            ],
            [
                'pregunta' => 'Com es diu "pit" en Hawaiá?',
                'resposta1' => "Umauma",
                'resposta2' => "Wawae",
                'resposta3' => "Waka-Waka",
                'font' => "google translate"
            ],
            [
                'pregunta' => 'Com es diu "plat de sopa" en Norueg?',
                'resposta1' => "Skal med Suppe",
                'resposta2' => "Sma rode sopp",
                'resposta3' => "caldó porfabó",
                'font' => "google translate"
            ],
            [
                'pregunta' => 'Com es diu "cronómetre" en hawaiá?',
                'resposta1' => "Manawa",
                'resposta2' => "Poepoe",
                'resposta3' => "Tikitaka",
                'font' => "google translate"
            ],
            [
                'pregunta' => 'Amb quants anys va morir Tutankamón?',
                'resposta1' => "19",
                'resposta2' => "15",
                'resposta3' => "Encara no ha mort",
                'font' => "wikipedia"
            ],
            [
                'pregunta' => 'En quin estat dels EUA van assesinar a John F. Kennedy?',
                'resposta1' => "Texas",
                'resposta2' => "Minessota",
                'resposta3' => "Massachustas",
                'font' => "wikipedia"
            ],
            [
                'pregunta' => 'En quin estat dels EUA van assesinar a John Lennon?',
                'resposta1' => "New York",
                'resposta2' => "California",
                'resposta3' => "Les Terres de l'Ebre",
                'font' => "wikipedia"
            ],
            [
                'pregunta' => 'Quin estat dels EUA és el més poblat?',
                'resposta1' => "California",
                'resposta2' => "Nova York",
                'resposta3' => "MeArkansas",
                'font' => "wikipedia"
            ],
            [
                'pregunta' => "Nom de l'actriu protagonista de Matrix (Trinity)",
                'resposta1' => "Carrie-Anne Moss",
                'resposta2' => "Natasha Brice",
                'resposta3' => "Carmen de Mairena",
                'font' => "wikipedia"
            ],
            [
                'pregunta' => "Quins colors atrau a les abelles?",
                'resposta1' => "Blau y Groc",
                'resposta2' => "Vermell y Verd",
                'resposta3' => "Rojo Burdeos num 7",
                'font' => "nationalgeographic.com."
            ],
            [
                'pregunta' => "Cuantes ales tenen les abelles?",
                'resposta1' => "4",
                'resposta2' => "2",
                'resposta3' => "527",
                'font' => "nationalgeographic.com."
            ],
            [
                'pregunta' => "Com s'anomera l'orifici per on respiren els dofins?",
                'resposta1' => "Espiráculo",
                'resposta2' => "Espínolo",
                'resposta3' => "Bocachancla",
                'font' => "nationalgeographic.com."
            ],
            [
                'pregunta' => "Quants estomacs té un camell?",
                'resposta1' => "3",
                'resposta2' => "2",
                'resposta3' => "masses",
                'font' => "nationalgeographic.com."
            ],
            [
                'pregunta' => "Que és la mirra?(dels Reis Mags)",
                'resposta1' => "Una Resina",
                'resposta2' => "Una Especia",
                'resposta3' => "Un Micro-Xip",
                'font' => "nationalgeographic.com."
            ],
            [
                'pregunta' => "On va surtir la tradició de decorar l'arbre de Nadal?",
                'resposta1' => "Alemania",
                'resposta2' => "Estats Units",
                'resposta3' => "Maspujols",
                'font' => "nationalgeographic.com"
            ],
            [
                'pregunta' => "Qui va inventar les tarjetes o portals Nadalenques?",
                'resposta1' => "Henry Cole",
                'resposta2' => "Norman Foster",
                'resposta3' => "Chiquito de la Calzada",
                'font' => "bbc.com"
            ],
            [
                'pregunta' => "En quin lloc del planeta s'entra abans al any nou?",
                'resposta1' => "Illa Kiritimati",
                'resposta2' => "Illa Pukapuka",
                'resposta3' => "La isla Bonita",
                'font' => "bbc.com"
            ],
            [
                'pregunta' => "En quin país es tradició netejar la casa de dalt a baix el dia 31 de desembre?",
                'resposta1' => "Japó",
                'resposta2' => "Venezuela",
                'resposta3' => "País del nunca Jamás",
                'font' => "bbc.com"
            ],
            [
                'pregunta' => "Quin planeta és mes fred?",
                'resposta1' => "Urano",
                'resposta2' => "Neptuno",
                'resposta3' => "Krypton",
                'font' => "nasa.com"
            ],
            [
                'pregunta' => "De qui es la frase: No hay caminos para la paz, la paz es el camino ?",
                'resposta1' => "Mahatma Gandhi",
                'resposta2' => "John Lennon",
                'resposta3' => "El Fary",
                'font' => "claridadmental.com"
            ],
            [
                'pregunta' => "De qui es la frase: El dineo no puede comprar la vida?",
                'resposta1' => "Bob Marley",
                'resposta2' => "Antonio Machado",
                'resposta3' => "Cañita Braba",
                'font' => "claridadmental.com"
            ],
            [
                'pregunta' => "De qui es la frase: Lo que no te mata, te hace mas fuerte?",
                'resposta1' => "Nietzsche",
                'resposta2' => "Descartes",
                'resposta3' => "Katy Perry",
                'font' => "claridadmental.com"
            ],
            [
                'pregunta' => "De qui es la frase: La verdadera sabiduría está en reconocer la propia ignorancia?",
                'resposta1' => "Sócrates",
                'resposta2' => "Platón",
                'resposta3' => "Belén Esteban",
                'font' => "claridadmental.com"
            ],
            [
                'pregunta' => "Qui va ser l'últim emperador Romá?",
                'resposta1' => "Teodosio I",
                'resposta2' => "Calígula",
                'resposta3' => "Bruce Willis",
                'font' => "wikipedia"
            ]


        ]);
    }
}
