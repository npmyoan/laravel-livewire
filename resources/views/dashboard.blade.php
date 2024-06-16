<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end px-10 py-5">
                    <a href="{{ route('appointments.create') }}"
                        class="py-3 px-6 bg-green-600 text-white uppercase rounded-xl hover:bg-green-500 active:scale-95 transition-colors cursor-pointer">+
                        Add new
                        appointment
                    </a>
                </div>
                <div class="p-6 text-gray-900">
                    <livewire:components.appointmentlist />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
