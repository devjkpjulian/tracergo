<?php

namespace App\Http\Livewire;

use App\Models\CForm;
use Livewire\Component;
use Illuminate\Http\Request;

class FormOptions extends Component
{
    public $email;
    public $age;
    public $gender;
    public $address;

    protected $listeners = [
        'cform:update' => '$refresh',
    ];
    
    public function mount()
    {
        $cform = CForm::where('user_id',auth()->user()->id)->first();

        if(is_null($cform))
        {
            $cform = CForm::create([
                'user_id' => auth()->user()->id,
            ]);
        }

        $this->email = $cform->email == 1 ? true : false;
        $this->age = $cform->age == 1 ? true : false;
        $this->gender = $cform->gender == 1 ? true : false;
        $this->address = $cform->address == 1 ? true : false;
    }

    public function hydrate()
    {
        $this->emit('cform:update');
    }

    public function dehydrate()
    {
        $this->emit('cform:update');
    }

    public function updated()
    {
        $cform = CForm::where('user_id',auth()->user()->id)->first();

        $cform->email = $this->email == 1 ? true : false;
        $cform->age = $this->age == 1 ? true : false;
        $cform->gender = $this->gender == 1 ? true : false;
        $cform->address = $this->address == 1 ? true : false;

        $cform->save();
        $this->emit('cform:update');
    }

    public function render()
    {
        return view('livewire.form-options');
    }
}
