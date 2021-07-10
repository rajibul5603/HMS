<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = ['_token'];
    use HasFactory;

    public function appointments()
    {
      return $this->hasMany(Appointment::class);
    }
}
