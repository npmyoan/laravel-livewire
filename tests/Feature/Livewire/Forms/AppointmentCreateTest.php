<?php

use App\Livewire\Forms\AppointmentCreate;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(AppointmentCreate::class)
        ->assertStatus(200);
});
