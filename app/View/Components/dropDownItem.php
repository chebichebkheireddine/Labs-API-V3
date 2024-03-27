<?php

namespace App\View\Components;

use App\Models\Analyse;

use Illuminate\View\Component;

class dropDownItem extends Component
{


    public function __construct()
    {
    }

    public function render()
    {
        return view('components.drop-down-item', [
            'currentLab' => Analyse::firstWhere("id", request("labs")),
            "items" => Analyse::all(),
            "analyses" => Analyse::all(),
        ]);
    }
}
