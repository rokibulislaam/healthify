<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        "doctorSpecialization",
        "doctor_id",
        "user_id",
        "consultancyFees",
        "appointmentDate",
        "appointmentTime",
        "userStatus",
        "doctorStatus",
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
