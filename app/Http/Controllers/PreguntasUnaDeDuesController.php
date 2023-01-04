<?php

namespace App\Http\Controllers;

use App\Models\IdsGeneradesUnaDeDues;
use App\Models\Jocs;
use App\Models\PreguntasUnaDeDues;
use App\Models\ReglesDelJoc;
use Illuminate\Http\Request;

class PreguntasUnaDeDuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $preguntes = PreguntasUnaDeDues::limit($request->howmany)->get();
        return [
            'status' => '1',
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
        $pregunta = PreguntasUnaDeDues::create($request->all());

        return [
            'status' => '1',
            'data' => $pregunta
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
        $pregunta = PreguntasUnaDeDues::findOrFail($id);

        return [
            'status' => '1',
            'data' => $pregunta
        ];
    }

    public function shownext($id)
    {
        $preguntesFalten = IdsGeneradesUnaDeDues::where('jocs_id', $id)->where('falta_respondre', 1)->get();
        $preguntesCompletades = IdsGeneradesUnaDeDues::where('jocs_id', $id)->where('falta_respondre', 0)->get();
        $preguntaToca = IdsGeneradesUnaDeDues::where('jocs_id', $id)->where('falta_respondre', 1)->limit(1)->get();
        $pregunta = PreguntasUnaDeDues::find($preguntaToca[0]->preguntas_una_de_dues_id);

        $rand = rand(1, 11);
        $resposta1 = [$pregunta->resposta1, true];
        $resposta2 = [$pregunta->resposta2, false];
        $resposta3 = [$pregunta->resposta3, false];
        if ($rand > 6) { // fem un random per canviar de posicio les preguntes 1 i 2 
            $resposta1 = [$pregunta->resposta2, false];
            $resposta2 = [$pregunta->resposta1, true];
        }

        return [            
            'status' => '1',
            'infoExtra' => [
                'prova' => 'preguntes una de dues',
                'game_id' => $id,
            ],
            'preguntesFalten' => $preguntesFalten->count(),
            'preguntesCompletades' => $preguntesCompletades->count(),
            'tocaID' => $preguntaToca[0]->id,
            'tocaPregunta' => $pregunta->pregunta,
            'tocaResposta1' => $resposta1,
            'tocaResposta2' => $resposta2,
            'tocaResposta3' => $resposta3, // preguntas al ciber si es millor enviar exclusivament la 
            // resposta i no tot l'array de informació (id, created at.. etc)
            // lo que implicaría fer un collection array i tal
            'tocaFont' => $pregunta->font
        ];
    }

    public function clickresposta(Request $request)
    {
        $pregunta = IdsGeneradesUnaDeDues::find($request->pregunta_id);
        $pregunta->falta_respondre = 0;
        $pregunta->save();

        $joc = Jocs::find($request->game_id);
        $rule = ReglesDelJoc::where('rule', 'punts_guanya_prova_4')->get()[0]->value;

        if ($request->winner === '1') {
            $joc->team1points += $rule;
        } else if ($request->winner === '2') {
            $joc->team2points += $rule;
        } else if ($request->winner === '3') {
            $joc->team3points += $rule;
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
        $pregunta = PreguntasUnaDeDues::findOrFail($id);
        $pregunta->pregunta = $request->pregunta;
        $pregunta->resposta1 = $request->resposta1;
        $pregunta->resposta2 = $request->resposta2;
        $pregunta->resposta3 = $request->resposta3;
        $pregunta->font = $request->font;

        $pregunta->save();

        return [
            'status' => '1',
            'data' => $pregunta
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
        $borrada = PreguntasUnaDeDues::findOrFail($id);
        $pregunta = PreguntasUnaDeDues::destroy($id);

        return [
            'status' => '1',
            'deleted_Pregunta' => $borrada
        ];
    }
}
