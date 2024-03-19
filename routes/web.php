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
    return view('home-page',["labs"=>Lab::all()]);
});
Route::get('/Analyses', function () {
    return view('analyse',["labs"=>Analyse::all()->load("labs")]);
});

Route::get("/labs/{labs}", function (Lab $labs) {
    return view("labs",["labs"=>$labs]);
});
Route::get("/Analyses/{Analyses}", function (Analyse $analyses) {
    return view("labs",["labs"=>$analyses->labs]);
});
// Route::get("Labs",function(){
//     return view("labs",[LabController::class,"index"]);
// });