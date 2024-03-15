<?php

use App\Http\Controllers\AnalyseController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\TestController;
use App\Models\Analyse;
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
Route::apiResource("Labs",LabController::class);
Route::apiResource("Analyse",AnalyseController::class);
Route::get("test/{id}",[TestController::class,"test"]);
Route::apiResource("dbtest",LabController::class);
// must be car full with name of ref