<?php

namespace App\Http\Controllers;

use App\Models\Analyse;
use App\Models\Lab;
use Illuminate\Http\Request;

class AnalyseController extends Controller
{

    // function search
    public function shearch()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //This is Analyse
        $analyses = Analyse::query();
        return view('analyses', [
            "analyses" => $analyses->filter(request(["search", "labs"]))->get(),
            // 'currentLab' => $analyse,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  make this request to create

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // make this request to edit

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //make request to update
        $analyse = Analyse::find($id);
        $analyse->name = $request->name;
        $analyse->parms = $request->parms;
        $analyse->value = $request->value;
        $analyse->lab_id = $request->lab_id;
        $result = $analyse->save();
        if ($result) {
            # code...
            return ["Result" => "Data has been updated"];
        } else {
            # code...
            return ["Result" => "Errors with data 401"];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //make request to delete
        $analyse = Analyse::find($id);
        $analyse->delete();
        if ($analyse) {
            # code...
            return ["Result" => "Data has been deleted"];
        } else {
            # code...
            return ["Result" => "Errors with data 401"];
        }
    }
}
