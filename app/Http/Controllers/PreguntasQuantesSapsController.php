<?php

namespace App\Http\Controllers;

use App\Models\IdGeneradesQuantesSaps;
use App\Models\Jocs;
use App\Models\PreguntasQuantesSaps;
use App\Models\ReglesDelJoc;
use App\Models\RespostesQuantesSaps;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;

class PreguntasQuantesSapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $preguntes = PreguntasQuantesSaps::with('respostes')->limit($request->howmany)->get();

        //with('respostes')->
        //->inRandomOrder()

        //$preguntes = PreguntasDonamElNumero::with('respostes')->where('id','27')->get();

        return [
            'status' => '1',
            'count' => count($preguntes),
            'data' => $preguntes
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pregunta = PreguntasQuantesSaps::create($request->all());
        $id = $pregunta->id;

        //collect necesari per fer un map -> collect(array)->map(func...)
        $arrayResp = collect($request->respostes);
        //use($id) necesari per fer servir variable de fora del map
        $arrayResp->map(function ($name) use ($id) {
            RespostesQuantesSaps::create([
                'preguntas_quantes_saps_id' => $id,
                'resposta'  => $name
            ]);
        });


        return [
            'status' => '1',
            'data' => $pregunta,
            'respostes' => $arrayResp
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pregunta = PreguntasQuantesSaps::with('respostes')->findOrFail($id);

        return $pregunta;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pregunta = PreguntasQuantesSaps::findOrFail($id);
        $pregunta->pregunta = $request->pregunta;
        $pregunta->titul = $request->titul;
        $pregunta->font = $request->font;

        $pregunta->save();

        $oldResp = RespostesQuantesSaps::where('preguntas_quantes_saps_id', $id)->get();
        $borraResp = RespostesQuantesSaps::where('preguntas_quantes_saps_id', $id)->delete();

        $arrayResp = collect($request->respostes);
        //use($id) necesari per fer servir variable de fora del map
        $arrayResp->map(function ($name) use ($id) {
            RespostesQuantesSaps::create([
                'preguntas_quantes_saps_id' => $id,
                'resposta'  => $name
            ]);
        });

        $newResp = RespostesQuantesSaps::where('preguntas_quantes_saps_id', $id)->get();

        return [
            'status' => '1',
            'newdata' => $pregunta,
            'updatedRespostes' => $newResp,
            'deletedRespostes' => $oldResp
        ];
    }

    public function shownext($id)
    {
        $preguntesFalten = IdGeneradesQuantesSaps::where('jocs_id', $id)->where('falta_respondre', 1)->get();
        $preguntesCompletades = IdGeneradesQuantesSaps::where('jocs_id', $id)->where('falta_respondre', 0)->get();
        $preguntaToca = IdGeneradesQuantesSaps::where('jocs_id', $id)->where('falta_respondre', 1)->limit(1)->get();
        $pregunta = PreguntasQuantesSaps::with('respostes')->find($preguntaToca[0]->preguntas_quantes_saps_id);
       
        return [
            'status' => '1',
            'infoExtra' => [
                'prova' => 'preguntes donam el numero',
                'game_id' => $id,
            ],
            'preguntesFalten' => $preguntesFalten->count(),
            'preguntesCompletades' => $preguntesCompletades->count(),
            'tocaID' => $preguntaToca[0]->id,
            'tocaPregunta' => $pregunta->pregunta,
            'tocaRespostes' => $pregunta->respostes, // preguntas al ciber si es millor enviar exclusivament la 
                                                    // resposta i no tot l'array de informació (id, created at.. etc)
                                                    // lo que implicaría fer un collection array i tal
            'tocaFont' => $pregunta->font
        ];
    }

    public function clickResposta(Request $request)
    {
        $pregunta = IdGeneradesQuantesSaps::find($request->pregunta_id);
        $pregunta->falta_respondre = 0;
        $pregunta->save();

        $joc = Jocs::find($request->game_id);
        $ruleWin = ReglesDelJoc::where('rule', 'punts_guanya_prova_2')->get()[0]->value;
        $ruleLose = ReglesDelJoc::where('rule', 'punts_perd_prova_2')->get()[0]->value;

        if ($request->winner === '1') {
            $joc->team1points += $ruleWin;
        } else if ($request->winner === '2') {
            $joc->team2points += $ruleWin;
        } else if ($request->winner === '3') {
            $joc->team3points += $ruleWin;
        }
        if ($request->loser === '1') {
            $joc->team1points += $ruleLose;
        } else if ($request->loser === '2') {
            $joc->team2points += $ruleLose;
        } else if ($request->loser === '3') {
            $joc->team3points += $ruleLose;
        }

        $joc->save();

        return [
            'status' => '1',
            'data' => $pregunta,
            'team1points' => $joc->team1points,
            'team2points' => $joc->team2points,
            'team3points' => $joc->team3points,
        ];
    }

    public function provacompletada($id){
        $joc = Jocs::find($id);
        $joc->prova2Completed = 1;
        $joc->save();
        
        return [
            'status' => '1',
            'joc' => $joc
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $respostesRelacionades = RespostesQuantesSaps::where('preguntas_quantes_saps_id', $id)->get();
        $borraResp = RespostesQuantesSaps::where('preguntas_quantes_saps_id', $id)->delete();
        $borrada = PreguntasQuantesSaps::findOrFail($id);
        $pregunta = PreguntasQuantesSaps::destroy($id);

        return [
            'status' => '1',
            'id_borrada' => $pregunta,
            'respostes_relacionades_borrades' => $respostesRelacionades,
            'pregunta_borrada' => $borrada
        ];
    }
}
