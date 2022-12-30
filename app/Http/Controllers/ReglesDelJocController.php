<?php

namespace App\Http\Controllers;

use App\Models\ReglesDelJoc;
use Illuminate\Http\Request;

class ReglesDelJocController extends Controller
{
    public function index(Request $request){
        $regles = ReglesDelJoc::get();

        return [
            'status' => '1',
            'data' => $regles
        ];
    }
}
