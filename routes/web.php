<?php

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

Route::get('/', function () {
    return view('home-page', [
        "labs" => Lab::all(),

        "analyses" => Analyse::all()
    ]);
});
Route::get('/Analyses', function (Analyse $analyse) {
    return view('analyses', [
        "analyses" => Analyse::all()->load("labs"),
        'currentLab' => $analyse,
        "analyse" => $analyse
    ]);
});

Route::get("/labs/{labs}", function (Lab $labs) {
    return view("labs", [
        "labs" => $labs,
        "analyses" => Analyse::all()
    ]);
});
Route::get("/labs", function () {
    return view("home-page", [
        "labs" => Lab::all(),
        "analyses" => Analyse::all()
    ]);
});
Route::get("/Analyses/{analyse}", function (Analyse $analyse) {
    return view("analyse", [
        "analyse" => $analyse,
        'currentLab' => $analyse,
        "analyses" => Analyse::all()->load("labs")
    ]);
});
// Route::get("Labs",function(){
//     return view("labs",[LabController::class,"index"]);
// });
