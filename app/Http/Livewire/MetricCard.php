<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Visitor;
use App\Models\Symptom;
use Livewire\Component;

class MetricCard extends Component
{
    public $users;
    public $visitors;
    public $symptoms;
    
    public function mount()
    {
        $this->users = User::count();
        $this->visitors = Visitor::count();
        $this->symptoms = Visitor::where('symptoms',true)->count();
    }

    public function render()
    {
        return view('livewire.metric-card');
    }
}
