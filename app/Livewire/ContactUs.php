<?php

namespace App\Livewire;

use App\Mail\BookMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactUs extends Component
{

    public $name;
    public $email;
    public $body;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|max:255',
        'body' => 'nullable'
    ];
    public function submitForm(){
        $this->validate();

        Mail::to($this->email )->send(new BookMail($this->name, $this->email, $this->body));

        session()->flash('success', 'Your message has been sent successfully!');

        $this->reset();
    }
    public function render()
    {
        return view('livewire.contact-us');
    }
}
