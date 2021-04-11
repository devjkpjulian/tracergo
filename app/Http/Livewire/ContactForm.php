<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\SendInquiry;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    public function submitForm()
    {
        $content['name'] = $this->name;
        $content['email'] = $this->email;
        $content['message'] = $this->message;

        Mail::to('contactus@tracergo.ph')->send(new SendInquiry($content));

        $this->name = "";
        $this->email = "";
        $this->message = "";
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
