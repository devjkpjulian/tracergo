<?php

namespace App\Http\Livewire;

use App\Models\Symptom;
use Livewire\Component;

class Symptoms extends Component
{
    public $fever;
    public $drycough;
    public $sorethroat;
    public $difficultbreathing;
    public $lossofsenses;
    public $fatigue;
    public $weakness;
    public $sneezing;
    public $diarrhoea;
    public $headache;
    
    public function mount()
    {
        $this->fever = Symptom::where('fever',true)->count();
        $this->drycough = Symptom::where('drycough',true)->count();
        $this->sorethroat = Symptom::where('sorethroat',true)->count();
        $this->difficultbreathing = Symptom::where('difficultbreathing',true)->count();
        $this->lossofsenses = Symptom::where('lossofsenses',true)->count();
        $this->fatigue = Symptom::where('fatigue',true)->count();
        $this->weakness = Symptom::where('weakness',true)->count();
        $this->sneezing = Symptom::where('sneezing',true)->count();
        $this->diarrhoea = Symptom::where('diarrhoear',true)->count();
        $this->headache = Symptom::where('headache',true)->count();
    }

    public function render()
    {
        return view('livewire.symptoms');
    }
}
