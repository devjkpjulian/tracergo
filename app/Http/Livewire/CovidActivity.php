<?php

namespace App\Http\Livewire;

use App\Models\Symptom;
use Livewire\Component;

class CovidActivity extends Component
{
    public $min;
    public $mid;
    public $max;
    
    public function mount()
    {
        $this->min = Symptom::where('temperature','<',36.1)->count();
        $this->mid = Symptom::whereBetween('temperature',[36.1,37.2])->count();
        $this->max = Symptom::where('temperature','>',37.2)->count();
    }

    public function render()
    {
        return view('livewire.covid-activity');
    }
}
