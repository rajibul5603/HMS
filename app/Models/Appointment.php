<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = ['_token'];
    use HasFactory;

    public function patient()
    {
      return $this->hasOne(Patient::class, 'id', 'patient_id');
    }

    public function doctor()
    {
      return $this->hasOne(User::class, 'id', 'user_id');
    }
}
