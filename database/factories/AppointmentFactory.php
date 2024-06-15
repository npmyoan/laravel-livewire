<?php

namespace Database\Factories;

use App\Models\Schedule;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'doctor_id' => User::factory()->create([
                'role' => User::DOCTOR,
            ]),
            'patient_id' => User::factory()->create([
                'role' => User::PATIENT,
            ]),
            'schedule_id' => Schedule::factory()->create(),
        ];
    }
}
