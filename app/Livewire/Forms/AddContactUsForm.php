<?php

namespace App\Livewire\Forms;

use App\Models\ContactUs;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AddContactUsForm extends Form
{
    #[Validate(['required', 'string'])]
    public string $name = '';

    #[Validate(['required', 'email'])]
    public string $email = '';

    #[Validate(['required', 'string'])]
    public string $city = '';

    #[Validate(['required', 'string'])]
    public string $state = '';

    #[Validate(['required', 'string'])]
    public string $message = '';

    public function store(): void
    {
        $this->validate();

        ContactUs::create($this->all());

        $this->reset();
    }
}
