<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointment';

    protected $fillable = [
        'doctor_id',
        'patient_id',
        'schedule_id',
    ];



    public function doctor(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'doctor_id');
    }

    public function patient()
    {
        return $this->hasOne(User::class, 'id', 'patient_id');
    }

    public function schedule()
    {
        return $this->hasOne(Schedule::class, 'id', 'schedule_id');
    }
}
