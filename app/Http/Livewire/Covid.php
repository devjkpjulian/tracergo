<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Covid extends Component
{
    public $cases;
    public $deaths;
    public $recoveries;
    
    public function mount()
    {
        $covid = Http::get("https://disease.sh/v3/covid-19/all");
        $this->cases = $covid['cases'];
        $this->deaths = $covid['deaths'];
        $this->recoveries = $covid['recovered'];
    }
    
    public function render()
    {
        return view('livewire.covid');
    }
}
