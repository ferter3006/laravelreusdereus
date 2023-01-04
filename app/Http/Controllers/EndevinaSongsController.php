<?php

namespace App\Http\Controllers;

use App\Models\EndevinaSongs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EndevinaSongsController extends Controller
{
    public function index(Request $request)
    {

        $songs = EndevinaSongs::limit($request->howmany)->get();

        $existe = 'no existe';
        $contents = Storage::url('/public/hola.txt');
        if (Storage::exists('/public/cosa.mp3')) {
            $existe = 'si que existe cosa.mp3';
        }
       
        if (Storage::exists('/public/hola.txt')) {
            //$existe = 'hola.txt existe';
        }



        Storage::disk('local')->put('example.txt', 'Contents');

        return [
            'status' => '1',
            'cosa' => $existe,
            'cosa2' => $contents,
            'count' => count($songs),
            'data' => $songs
        ];
    }
}
