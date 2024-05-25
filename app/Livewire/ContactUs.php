<?php

namespace App\Livewire;

use App\Livewire\Forms\AddContactUsForm;
use Illuminate\View\View;
use Livewire\Component;

class ContactUs extends Component
{
    public AddContactUsForm $form;

    public function save(): void
    {
        $this->form->store();

        session()->flash('status', 'Thanks for sharing your thought.');
    }

    public function render(): View
    {
        return view('livewire.contact-us');
    }
}
