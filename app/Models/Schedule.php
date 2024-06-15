<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Schedule extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'time' => 'immutable_datetime:d-m-Y',
            'created_at' => 'datetime:d-m-Y',
        ];
    }
    public function appointments(): BelongsToMany
    {
        return $this->belongsToMany(Appointment::class, 'appointment', 'schedule_id');
    }
}
