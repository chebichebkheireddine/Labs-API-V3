<?php

use App\Http\Controllers\AnalyseController;
use App\Http\Controllers\LabController;
use App\Models\Analyse;
use App\Models\Lab;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LabController::class, "index"])->name("home-page");
Route::get('/Analyses', [AnalyseController::class, "index"])->name("analyses");
Route::get("/labs", [LabController::class, "index"])->name("labs");

// Labs change to /?labs
Route::get("/labs/{labs}", function (Lab $labs) {
    return view("labs", [
        "labs" => $labs,
        'currentLab' => $labs,
        "analyses" => Analyse::all()
    ]);
})->name("labs-tag");
Route::get("/Analyses/{analyse}", function (Analyse $analyse) {
    return view("analyse", [
        "analyse" => $analyse,
        'currentLab' => $analyse,
        "analyses" => Analyse::all()->load("labs")
    ]);
})->name("analyse-tag");
