<?php

namespace App\Http\Controllers;

use App\Models\EndevinaSongs;
use Illuminate\Http\Request;

class EndevinaSongsController extends Controller
{
    public function index(Request $request)
    {

        $songs = EndevinaSongs::limit($request->howmany)->get();

        //with('respostes')->
        //->inRandomOrder()

        //$preguntes = PreguntasDonamElNumero::with('respostes')->where('id','27')->get();

        return [
            'status' => '1',
            'count' => count($songs),
            'data' => $songs
        ];
    }

}
