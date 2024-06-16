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
        // Appointment::create($this->only(['doctor_id', 'patient_id', 'schedule_id']));
        Appointment::create([
            'doctor_id' => $this->doctor_id,
            'patient_id' => $this->patient_id,
            'schedule_id' => $this->schedule_id,
        ]);
    }
}
