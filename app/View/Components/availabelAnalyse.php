<?php

namespace App\View\Components;

use App\Models\Analyse;
use App\Models\Lab;
use Illuminate\View\Component;

class availabelAnalyse extends Component
{
    public $analysis;

    /**
     * Create a new component instance.
     *
     * @param  mixed  $analysis
     * @return void
     */
    public function __construct(Lab $lab)
    {
        $this->$lab = Analyse::all();
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.availabel-analyse', [
            'lab' => $this->analysis->analyse,
        ]);
    }
}