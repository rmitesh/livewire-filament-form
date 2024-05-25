<?php

namespace App\Livewire;

use App\Models\ContactUs;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Notifications\Notification;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;

#[Title('Filament Contact Us')]
class CreateContactUs extends Component implements HasForms, HasActions
{
    use InteractsWithForms, InteractsWithActions;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->columns()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->placeholder('Name'),

                        Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->placeholder('Email'),

                        Forms\Components\TextInput::make('city')
                            ->required()
                            ->placeholder('City'),

                        Forms\Components\TextInput::make('state')
                            ->required()
                            ->placeholder('State'),

                        Forms\Components\Textarea::make('message')
                            ->required()
                            ->columnSpanFull()
                            ->placeholder('Write your message...'),
                    ]),
            ])
            ->statePath('data')
            ->model(ContactUs::class);
    }

    public function create(): void
    {
        $data = $this->form->getState();

        $record = ContactUs::create($data);

        $this->form->model($record)->saveRelationships();

        $this->form->fill();

        Notification::make()
            ->title('Thanks for sharing your thought.')
            ->success()
            ->send();
    }

    public function saveFormActions(): Action
    {
        return Action::make('submit')
            ->icon('heroicon-o-plus-circle')
            ->submit('create');
    }

    public function render(): View
    {
        return view('livewire.create-contact-us');
    }
}
