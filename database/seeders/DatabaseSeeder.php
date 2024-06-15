<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Schedule;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(20)->create([
            'role' => User::DOCTOR,
        ]);
        User::factory(20)->create([
            'role' => User::PATIENT,
        ]);
        Schedule::factory(20)->create();
        // Appointment::factory(20)->create();
    }
}
