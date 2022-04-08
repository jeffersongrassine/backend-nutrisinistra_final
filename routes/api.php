<?php

use App\Http\Controllers\AnamneseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\DiarioAlimentarContoller;
use App\Http\Controllers\FrequenciaAlimentarContoller;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/**Login */
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

/**Anamnese */
Route::get('anamnese', [AnamneseController::class, 'index']);
Route::post('anamnese', [AnamneseController::class, 'store'])->middleware('auth:sanctum');
Route::get('anamnese/{id}', [AnamneseController::class, 'show'])->middleware('auth:sanctum');
Route::put('anamnese/{id}', [AnamneseController::class, 'update'])->middleware('auth:sanctum');
Route::delete('anamnese/{id}', [AnamneseController::class, 'destroy'])->middleware('auth:sanctum');

/**Diário Alimentar */ 
Route::get('diario-alimentar', [DiarioAlimentarContoller::class, 'index']);
Route::post('diario-alimentar', [DiarioAlimentarContoller::class, 'store'])->middleware('auth:sanctum');
Route::get('diario-alimentar/{id}', [DiarioAlimentarContoller::class, 'show'])->middleware('auth:sanctum');
Route::put('diario-alimentar/{id}', [DiarioAlimentarContoller::class, 'update'])->middleware('auth:sanctum');
Route::delete('diario-alimentar/{id}', [DiarioAlimentarContoller::class, 'destroy'])->middleware('auth:sanctum');

/**Frequencia Alimentar */ 
Route::get('frequencia-alimentar', [FrequenciaAlimentarContoller::class, 'index'])->middleware('auth:sanctum');
Route::post('frequencia-alimentar', [FrequenciaAlimentarContoller::class, 'store'])->middleware('auth:sanctum');
Route::get('frequencia-alimentar/{id}', [FrequenciaAlimentarContoller::class, 'show'])->middleware('auth:sanctum');
Route::put('frequencia-alimentar/{id}', [FrequenciaAlimentarContoller::class, 'update'])->middleware('auth:sanctum');
Route::delete('frequencia-alimentar/{id}', [FrequenciaAlimentarContoller::class, 'destroy'])->middleware('auth:sanctum');


/**Consulta */ 
Route::get('consulta', [ConsultaController::class, 'index'])->middleware('auth:sanctum');
Route::post('consulta', [ConsultaController::class, 'store'])->middleware('auth:sanctum');
Route::get('consulta/{id}', [ConsultaController::class, 'show'])->middleware('auth:sanctum');
Route::put('consulta/{id}', [ConsultaController::class, 'update'])->middleware('auth:sanctum');
Route::delete('consulta/{id}', [ConsultaController::class, 'destroy'])->middleware('auth:sanctum');







// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
