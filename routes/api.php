<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EndevinaSongsController;
use App\Http\Controllers\GameCreatorController;
use App\Http\Controllers\PreguntasDonemElNumeroController;
use App\Http\Controllers\PreguntasQuantesSapsController;
use App\Http\Controllers\PreguntasUnaDeDuesController;
use App\Http\Controllers\ReglesDelJocController;
use App\Models\PreguntasDonamElNumero;
use App\Models\ReglesDelJoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Sanctum;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/token', [AuthController::class, 'test']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::middleware(['auth:sanctum'])->group(function () {

Route::get('/preguntesdonamelnumero', [PreguntasDonemElNumeroController::class, 'index'])->middleware('can:jugar');
Route::get('/preguntesdonamelnumero/{id}', [PreguntasDonemElNumeroController::class, 'show'])->middleware('can:jugar');
Route::get('/preguntesdonamelnumero/game/{id}', [PreguntasDonemElNumeroController::class, 'shownext'])->middleware('can:jugar');
Route::post('/preguntesdonamelnumero/clickresposta', [PreguntasDonemElNumeroController::class, 'clickresposta'])->middleware('can:jugar');
Route::post('/preguntesdonamelnumero/completaprova/{id}', [PreguntasDonemElNumeroController::class, 'provacompletada'])->middleware('can:jugar');
Route::post('/preguntesdonamelnumero', [PreguntasDonemElNumeroController::class, 'store'])->middleware('can:crear');
Route::post('/preguntesdonamelnumero/{id}', [PreguntasDonemElNumeroController::class, 'update'])->middleware('can:crear');
Route::delete('/preguntesdonamelnumero/{id}', [PreguntasDonemElNumeroController::class, 'destroy'])->middleware('can:crear');

Route::get('/preguntesquantessaps', [PreguntasQuantesSapsController::class, 'index'])->middleware('can:jugar');
Route::get('/preguntesquantessaps/{id}', [PreguntasQuantesSapsController::class, 'show'])->middleware('can:jugar');
Route::get('/preguntesquantessaps/game/{id}', [PreguntasQuantesSapsController::class, 'shownext'])->middleware('can:jugar');
Route::post('/preguntesquantessaps/clickresposta', [PreguntasQuantesSapsController::class, 'clickresposta'])->middleware('can:jugar');
Route::post('/preguntesquantessaps/completaprova/{id}', [PreguntasQuantesSapsController::class, 'provacompletada'])->middleware('can:jugar');
Route::post('/preguntesquantessaps', [PreguntasQuantesSapsController::class, 'store'])->middleware('can:crear');
Route::put('/preguntesquantessaps/{id}', [PreguntasQuantesSapsController::class, 'update'])->middleware('can:crear');
Route::delete('/preguntesquantessaps/{id}', [PreguntasQuantesSapsController::class, 'destroy'])->middleware('can:crear');

Route::get('/preguntesunadedues', [PreguntasUnaDeDuesController::class, 'index'])->middleware('can:jugar');
Route::get('/preguntesunadedues/{id}', [PreguntasUnaDeDuesController::class, 'show'])->middleware('can:jugar');
Route::get('/preguntesunadedues/game/{id}', [PreguntasUnaDeDuesController::class, 'shownext'])->middleware('can:jugar');
Route::post('/preguntesunadedues/clickresposta', [PreguntasUnaDeDuesController::class, 'clickresposta'])->middleware('can:jugar');
Route::post('/preguntesunadedues/completaprova/{id}', [PreguntasUnaDeDuesController::class, 'provacompletada'])->middleware('can:jugar');
Route::post('/preguntesunadedues', [PreguntasUnaDeDuesController::class, 'store'])->middleware('can:crear');
Route::put('/preguntesunadedues/{id}', [PreguntasUnaDeDuesController::class, 'update'])->middleware('can:crear');
Route::delete('/preguntesunadedues/{id}', [PreguntasUnaDeDuesController::class, 'destroy'])->middleware('can:crear');



Route::post('/crearjuego', [GameCreatorController::class, 'crearGame'])->middleware('can:jugar');
Route::get('/mostrajuego/{id}', [GameCreatorController::class, 'mostraGame'])->middleware('can:jugar');
Route::get('/mostrasoloequipos/{id}', [GameCreatorController::class, 'mostrasoloequipos'])->middleware('can:jugar');


}); // end sanctum group routes

//Route::get('/endevinasongs', [EndevinaSongsController::class, 'index'])->middleware('can:jugar');
Route::get('/endevinasongs', [EndevinaSongsController::class, 'index']);

Route::get('/game/rules', [ReglesDelJocController::class, 'index']);