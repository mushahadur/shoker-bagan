<?php

namespace App\Models;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consultant extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'service',
        'morning_time',
        'evening_time',
        'night_time',
        'certificate',
    ];
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'consultant_id');
    }
}
