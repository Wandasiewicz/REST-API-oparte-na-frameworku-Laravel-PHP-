<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peopleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('MWandasiewicz/310841/people', [peopleController::class, 'index']);
Route::get('MWandasiewicz/310841/people/{id}', [peopleController::class, 'show']);
Route::post('MWandasiewicz/310841/people', [peopleController::class, 'store']);
Route::put('MWandasiewicz/310841/people/{id}', [peopleController::class, 'update']);
Route::delete('MWandasiewicz/310841/people/{id}', [peopleController::class, 'destroy']);