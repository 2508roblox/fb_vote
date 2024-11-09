<?php

namespace App\Livewire;

use App\Models\Schedule;
use Livewire\Component;

class ScheduleForm extends Component
{
    public $name;
    public $phone;
    public $email;
    public $content;

    protected $rules = [
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'email' => 'required|email',
        'content' => 'required|string',
    ];

    public function submitSchedule()
    {
        // $this->validate();

        Schedule::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'content' => $this->content,
        ]);

        session()->flash('message', 'Đặt lịch thành công! Chúng tôi sẽ liên hệ với bạn sớm.');

        // Clear form fields after submission
        $this->reset(['name', 'phone', 'email', 'content']);
    }

    public function render()
    {
        return view('livewire.schedule-form');
    }
}
