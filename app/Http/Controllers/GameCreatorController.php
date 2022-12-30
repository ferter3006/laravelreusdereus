<?php

namespace App\Http\Controllers;

use App\Models\EndevinaSongs;
use App\Models\IdGeneradesEndevinaSongs;
use App\Models\IdsGeneradesDonamElNumero;
use App\Models\IdGeneradesQuantesSaps;
use App\Models\IdsGeneradesUnaDeDues;
use App\Models\Jocs;
use App\Models\PreguntasDonamElNumero;
use App\Models\PreguntasQuantesSaps;
use App\Models\PreguntasUnaDeDues;
use App\Models\ReglesDelJoc;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameCreatorController extends Controller
{

    public function mostraGame($id)
    {                
        $joc = Jocs::with(
            'IdsGeneradesDonamElNumero',
            'IdGeneradesQuantesSaps',
            'IdGeneradesEndevinaSongs',
            'IdsGeneradesUnaDeDues')->where('id', $id)->get();

        return [
            'status' => '1',
            'data' => $joc
        ];
    }

    public function mostrasoloequipos($id){
        $joc = Jocs::find($id);

        return [
            'status' => '1',
            'idOfGame'=> $joc->id,
            'team1Name' => $joc->team1name,
            'team2Name' => $joc->team2name,
            'team3Name' => $joc->team3name,
            'team1Points' => $joc->team1points,
            'team2Points' => $joc->team2points,
            'team3Points' => $joc->team3points,

        ];
    }

    public function crearGame(Request $request)
    {
        // Crearem el joc per complet.
        // Guardant ja totes les dades inclus les random en les seves taules corresponents.

        // Validem un mínim de camps del request pel bon funcionament
        $request->validate([
            'id' => 'required|exists:users,id',
            'username' => 'required|exists:users,name',
            'email' => 'required|exists:users,email',            
            'team1name' => 'required|min:6',
            'team2name' => 'required|min:6',
            'team3name' => 'required|min:6',
        ]);

        // Creem el joc amb l'informació basica a taula Jocs
        $joc = Jocs::create([
            'user_id' => $request->id,
            'team1name' => $request->team1name,
            'team2name' => $request->team2name,
            'team3name' => $request->team3name,            
        ]);

        // llegim les regles del joc (quantiat de preguntes de cada prova)        
        $ruleNumberOfDonam = ReglesDelJoc::where('rule', 'quantitat_preguntes_donam_el_numero')->get();
        $ruleNumberOfEndevinaSong = ReglesDelJoc::where('rule', 'quantitat_preguntes_endevina_song')->get();
        $ruleNumberOfUnaDeDues = ReglesDelJoc::where('rule', 'quantitat_preguntes_una_de_dues')->get();
        $ruleNumberOfQuantesSaps = ReglesDelJoc::where('rule', 'quantitat_preguntes_quantes_saps')->get();
        
        // Amb les rules definides, demanem X random preguntes de cada taula corresponent.
        // Només ens interesa la ID en aquest moment per guardar tota la info del Joc generat. 
        $seleccioDonemElNumero = PreguntasDonamElNumero::inRandomOrder()->limit($ruleNumberOfDonam[0]->value)->get('id');
        $seleccioQuantesSaps = PreguntasQuantesSaps::inRandomOrder()->limit($ruleNumberOfQuantesSaps[0]->value)->get('id');
        $seleccioSongs = EndevinaSongs::inRandomOrder()->limit($ruleNumberOfEndevinaSong[0]->value)->get('id');
        $seleccioUnaDedues = PreguntasUnaDeDues::inRandomOrder()->limit($ruleNumberOfUnaDeDues[0]->value)->get('id');

        // Com que haurem de fer un map de totes les seleccions obtingudes, primer toca fer un collect
        $arrayDonemelNumero = collect($seleccioDonemElNumero);
        $arrayQuantesSaps = collect($seleccioQuantesSaps);
        $arraySongs = collect($seleccioSongs);
        $arrayUnaDeDues = collect($seleccioUnaDedues);

        // Ara si, fem els mapeos per guardar l'informació en cada taula corresponent
        // MAPEOS > Donam El Numero
        $arrayDonemelNumero->map(function ($arraymap) use ($joc) {
            IdsGeneradesDonamElNumero::insert([
                [
                    'jocs_id' => $joc->id,
                    'preguntas_donam_el_numeros_id' => $arraymap->id,
                ]
            ]);
        });

        // MAPEOS > Quantes Saps
        $arrayQuantesSaps->map(function ($arraymap) use ($joc) {
            IdGeneradesQuantesSaps::insert([
                [
                    'jocs_id' => $joc->id,
                    'preguntas_quantes_saps_id' => $arraymap->id
                ]
            ]);
        });

        // MAPEOS > Endevina Song
        $arraySongs->map(function ($arraymap) use ($joc) {
            IdGeneradesEndevinaSongs::insert([
                [
                    'jocs_id' => $joc->id,
                    'endevina_songs_id' => $arraymap->id
                ]
            ]);
        });

        // MAPEOS > Una de Dues
        $arrayUnaDeDues->map(function ($arraymap) use ($joc) {
            IdsGeneradesUnaDeDues::insert([
                [
                    'jocs_id' => $joc->id,
                    'preguntas_una_de_dues_id' => $arraymap->id
                ]
            ]);
        });

        $jocCreat = Jocs::with(
            'IdsGeneradesDonamElNumero',
            'IdGeneradesQuantesSaps',
            'IdGeneradesEndevinaSongs',
            'IdsGeneradesUnaDeDues')->where('id', $joc->id)->get();
        return [
            'status' => '1',            
            'jocCreat' => $jocCreat
        ];
    }
}
