<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PetitionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/petitions', [PetitionController::class, 'index']);
// Route::post('/petitions', [PetitionController::class, 'store']);
Route::apiResource('/petitions', PetitionController::class);
Route::apiResource('/authors', AuthorController::class)
    ->only(['index', 'show']);

// Route::resource('/petitions', PetitionController::class)->only(['index', 'store']);
