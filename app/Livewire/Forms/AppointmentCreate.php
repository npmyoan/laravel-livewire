<?php

namespace App\Livewire\Forms;


use Livewire\Attributes\Validate;
use Livewire\Form;
use \App\Models\Appointment;


class AppointmentCreate extends Form
{
    #[Validate('required')]
    public $doctor_id;

    #[Validate('required')]
    public $patient_id;

    #[Validate('required')]
    public $schedule_id;

    public function store()
    {
        Appointment::create([
            'doctor_id' => (int) $this->doctor_id,
            'patient_id' => (int) $this->patient_id,
            'schedule_id' => (int) $this->schedule_id,
        ]);

    }
}
