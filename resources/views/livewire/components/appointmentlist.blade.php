<?php

use App\Models\Appointment;
use function Livewire\Volt\{state, computed};

state([
    'appointments' => Appointment::with('doctor')->with('patient')->with('schedule')->get(),
]);

?>

<div>
    <h1>Lista de citas</h1>

    @forelse  ($appointments as $appointment)
        <h2>Doctor: {{ $appointment->doctor->name }}</h2>
        <h2>Patient: {{ $appointment->patient->name }}</h2>
        <p>{{ $appointment->schedule->time->diffForHumans() }}</p>

    @empty
        <p>No existen citas</p>
    @endforelse
</div>
