<?php

namespace App\Http\Controllers;

use App\Models\IdsGeneradesDonamElNumero;
use App\Models\Jocs;
use App\Models\PreguntasDonamElNumero;
use App\Models\ReglesDelJoc;
use App\Models\RespostesQuantesSaps;
use Illuminate\Http\Request;

class PreguntasDonemElNumeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $preguntes = PreguntasDonamElNumero::limit(15)->inRandomOrder()->get();

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
        $pregunta = PreguntasDonamElNumero::create($request->all());
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
        $pregunta = PreguntasDonamElNumero::findOrFail($id);

        return [
            'status' => '1',
            'data' => $pregunta
        ];
    }

    public function provacompletada($id){
        $joc = Jocs::find($id);
        $joc->prova1Completed = 1;
        $joc->save();

        return [
            'status' => '1',
            'joc' => $joc
        ];
    }

    public function shownext($id)
    {        
        $preguntesFalten = IdsGeneradesDonamElNumero::where('jocs_id', $id)->where('falta_respondre', 1)->get();
        $preguntesCompletades = IdsGeneradesDonamElNumero::where('jocs_id', $id)->where('falta_respondre', 0)->get();
        $preguntaToca = IdsGeneradesDonamElNumero::where('jocs_id', $id)->where('falta_respondre', 1)->limit(1)->get();
        $pregunta = PreguntasDonamElNumero::find($preguntaToca[0]->preguntas_donam_el_numeros_id);        
        
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
            'tocaResposta' => $pregunta->resposta,
            'tocaFont' => $pregunta->font
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
        $pregunta = PreguntasDonamElNumero::findOrFail($id);

        $pregunta->pregunta = $request->pregunta;
        $pregunta->resposta = $request->resposta;
        $pregunta->font = $request->font;

        $pregunta->save();


        return [
            'stauts' => '1',
            'data' => $pregunta
        ];
    }
    
    // aquí en clickresposta l'unic que fem es:
    // posar falta_respondre = 0 a la pregunta que hem utilitzat
    // i luego sumar els punts corresponents al equip que toca
    public function clickresposta(Request $request)
    {
        $pregunta = IdsGeneradesDonamElNumero::find($request->pregunta_id);
        $pregunta->falta_respondre = 0;
        $pregunta->save();

        $joc = Jocs::find($request->game_id);
        $rule = ReglesDelJoc::where('rule', 'punts_guanya_prova_1')->get()[0]->value;

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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $borrada = PreguntasDonamElNumero::findOrFail($id);
        $pregunta = PreguntasDonamElNumero::destroy($id);

        return [
            'status' => '1',
            'pregunta_borrada' => $borrada
        ];
    }
}
