<?php

namespace App\Http\Livewire;

use App\Models\Visitor;
use Livewire\Component;

class VisitorList extends Component
{
    public function render()
    {
        $visitors = Visitor::where('user_id',auth()->user()->id)->latest()->get();
        return view('livewire.visitor-list',compact('visitors'));
    }
}
