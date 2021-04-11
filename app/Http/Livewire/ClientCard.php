<?php

namespace App\Http\Livewire;

use App\Models\CForm;
use App\Models\Visitor;
use Livewire\Component;

class ClientCard extends Component
{
    public $visitors;
    public $symptoms;
    
    public function mount()
    {
        $this->visitors = Visitor::where('user_id',auth()->user()->id)->count();
        $this->symptoms = Visitor::where('user_id',auth()->user()->id)->where('symptoms','true')->count();

        if(is_null(CForm::where('user_id',auth()->user()->id)->first()))
        {
            CForm::create([
                'user_id' => auth()->user()->id,
            ]);
        }
    }

    public function render()
    {
        return view('livewire.client-card');
    }
}
