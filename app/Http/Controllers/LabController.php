<?php

namespace App\Http\Controllers;

use App\Models\Analyse;
use App\Models\Lab;


class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        /*
        // you can use anthor way to search without use latest fuloow this code
        // add query to search
        $post = Lab::query();
        // $post = Lab::latest();
        if (request("sherch")) {
            return view('home-page', [
                "labs" => $post->where("name", "like", "%" . request("sherch") . "%")
                    ->orWhere("address", "like", "%" . request("sherch") . "%")->get(),
                "analyses" => Analyse::where("name", "like", "%" . request("sherch") . "%")->get()
            ]);
        }
        return view('home-page', [
            "labs" => Lab::all(),
            "analyses" => Analyse::all(),
        ]);      */
    }
    public function index()
    {


        $labs = Lab::query();

        return view('home-page', [
            "labs" => $labs->filter(request(["search", "analyses"]))->get(),
            "analyses" => Analyse::all(),
        ]);
    }

    // public function show(Analyse $analyse)
    // {
    //     return view('analyses', [
    //         "analyses" => Analyse::all()->load("labs"),
    //         'currentLab' => $analyse,
    //         "analyse" => $analyse
    //     ]);
    // }
}
