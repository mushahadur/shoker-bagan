<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
