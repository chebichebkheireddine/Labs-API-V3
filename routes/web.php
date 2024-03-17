<?php

use App\Http\Controllers\LabController;
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
Route::get("/labs", function (Lab $labs) {
    return view("labs",["labs"=>$labs]);
});
// Route::get("Labs",function(){
//     return view("labs",[LabController::class,"index"]);
// });