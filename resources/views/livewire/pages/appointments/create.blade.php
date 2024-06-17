<?php
use App\Livewire\Forms\AppointmentCreate;
use function Livewire\Volt\layout;
use function Livewire\Volt\{state, form};

layout('layouts.app');

form(AppointmentCreate::class);

$save = function () {
    $this->validate();
    $this->form->store();

    $this->redirect('/dashboard', navigate: true);
};
?>

<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end px-10 py-5">
                    <a href="{{ route('dashboard') }}"
                        class="py-3 px-6 bg-slate-600 text-white uppercase rounded-xl hover:bg-slate-500 active:scale-95 transition-colors cursor-pointer">
                        List Appointment
                    </a>
                </div>
                <div class="p-6 text-gray-900">

                    <form wire:submit.prevent="save">

                        <legend>Add new Appointment</legend>

                        <div>
                            <select wire:model="form.doctor_id">
                                <option selected>--Selecione el Doctor--</option>
                                <option value="1">Melita</option>
                                <option value="2">Claudia</option>
                                <option value="3">Martica</option>
                            </select>
                            @error('form.doctor_id')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <select wire:model="form.patient_id">
                                <option selected>--Selecione el Paciente--</option>
                                <option value="4">Yoan</option>
                                <option value="5">Juan</option>
                                <option value="6">Cris</option>
                            </select>
                            @error('form.patient_id')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <select wire:model="form.schedule_id">
                                <option selected>--Selecione el Paciente--</option>
                                <option value="1">Yoan</option>
                                <option value="2">Juan</option>
                                <option value="3">Cris</option>
                            </select>
                            @error('form.schedule_id')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        </fieldset>
                        <button type="submit"
                            class=" mt-3 py-1 px-3 font-bold bg-slate-600 text-white uppercase rounded-xl hover:bg-slate-500 active:scale-95 transition-colors cursor-pointer">

                            Save</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
