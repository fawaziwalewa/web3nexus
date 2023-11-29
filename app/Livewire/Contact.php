<?php

namespace App\Livewire;

use App\Models\Contact as ContactModel;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Filament\Notifications\Notification;

class Contact extends Component
{
    #[Validate('required|min:3|max:191')]
    public $name;

    #[Validate('required|email:rfc,dns|min:7|max:191')]
    public $email;

    #[Validate('required|in:consultation,development,design,maintenance,testing,bug,others')]
    public $purpose;

    #[Validate('required|min:10|max:2000')]
    public $message;

    public function save(){
        $this->validate();

        ContactModel::create([
            'name' => $this->name,
            'email' => $this->email,
            'purpose' => $this->purpose,
            'message' => $this->message,
        ]);

        $this->reset();

        Notification::make()
            ->title('Sent successfully 🚀')
            ->body('Our team is excited to dive into your project. Expect to hear from us shortly to discuss the next steps. Thank you for choosing us! 🌐✨')
            ->success()
            ->seconds(20)
            ->send();
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
