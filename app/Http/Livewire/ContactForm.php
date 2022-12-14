<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $body;

    protected $rules=[
        'name'=>['required','min:2','max:30'],
        'email'=>['required'],
        'body'=>['required','max:1024'],
    ];

    public function contactFormSubmit()
    {
        $this->validate();
        $data=array(
            'name'=>$this->name,
            'email'=>$this->email,
            'body'=>$this->body,
        );
        Mail::to('info@business.com')->send(new ContactFormMailable($data));
        session()->flash('message','Thank you for reaching out to us!');
        $this->reset();

    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
