<?php

namespace App\Http\Controllers;

use App\Models\Analyse;
use App\Models\Lab;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function test($id){
         // Assuming the userId is passed as a query parameter
        
        // $query = Analyse::with('labs');
        //  $query->where('id_l',"id");
        $users = Analyse::all()
->where('id', '=', $id)
    ->with('id_l')
    ->get();
    // echo dd($users);

        // $users = $query->get();
        
        return response()->json(($users));

    }
}
