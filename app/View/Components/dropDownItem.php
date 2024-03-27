<?php

namespace App\View\Components;

use App\Models\Analyse;
use App\Models\Lab;
use Illuminate\View\Component;

class dropDownItem extends Component
{
    protected $analyse;

    public function __construct($analyse)
    {
        $this->analyse = $analyse;
    }

    public function render()
    {
        return view('components.card-analyse', [
            'currentLab' => Analyse::firstWhere("name", request("labs")),
            "items" => Analyse::all(),
            "analyse" => $this->analyse,
        ]);
    }
}
