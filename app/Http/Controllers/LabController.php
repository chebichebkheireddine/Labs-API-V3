<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Call api 
        // return Lab::all();
        return Lab::with("analyses")->get(); // Assuming you have a Lab model
        // return view("labs.index", compact('labs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Add validator to this code 
        $ruls = array(
            
                "name" => "required",
                "phone" => "required",
                "photo" => "required",
                "address" => "required",
        );
        // Call validator
        $validator = Validator::make($request->all(), $ruls);
        // Test Validation to test it
        if ($validator->fails()) {
            return response()->json($validator->errors(), 401);
        } else {
            //This is for save the data
            $labs = new Lab;
            $labs->name = $request->name;
            $labs->phone = $request->phone;
            $labs->photo = $request->photo;
            $labs->address = $request->address;
            $result = $labs->save();
            if ($result) {
                # code...
                return ["Result" => "Done with add "];
            } else {
                # code...
                return ["Result" => "Errors with data 401"];
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Lab::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //How to use it is not Allows to use here
        
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
        //This with updata
        $rules=array(
            "id"=>"required",
            "name" => "required",
            "phone" => "required",
            "photo" => "required",
            "address" => "required",
        );
        $validator=Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 401);
        } else {
            //This is for save the data
            $labs =Lab::find($id);
            $labs->id = $request->id;
            $labs->name = $request->name;
            $labs->phone = $request->phone;
            $labs->photo = $request->photo;
            $labs->address = $request->address;
            $result = $labs->save();
            if ($result) {
                # code...
                return ["Result" => "Done with Updata"];
            } else {
                # code...
                return ["Result" => "Errors with data 401 can't Update this "];
            }
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
        //This is for delet this endPoint API Labs{Id}
        $lab=Lab::find($id);
        $result=$lab->delete();
        if ($result) {
            # code...
            return ["Result"=>"Delete is Done"];
        }
        else{

            return ["Result"=>"Delete is Don't Delete"];
        }
    }
}
