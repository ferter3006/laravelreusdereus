<?php

namespace App\Http\Controllers;

use App\Models\PreguntasUnaDeDues;
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
