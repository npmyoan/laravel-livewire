<?php

use App\Models\Appointment;
use function Livewire\Volt\{state, computed};

state([
    'appointments' => Appointment::with('doctor')->with('patient')->with('schedule')->get(),
]);

?>

<div class="bg-slate-400 p-4">
    <h1 class="text-3xl px-4 py-6 font-bold font-serif text-white">Lista de citas</h1>
    <div class="flex gap-6 flex-wrap">
        @forelse  ($appointments as $appointment)
            <div class="rounded-lg p-2 bg-white w-100">
                <h2>Doctor: {{ $appointment->doctor->name }}</h2>
                <h2>Patient: {{ $appointment->patient->name }}</h2>
                <p>{{ $appointment->schedule->time->diffForHumans() }}</p>
            </div>
        @empty
            <p>No existen citas</p>
        @endforelse
    </div>
</div>
