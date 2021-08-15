<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestName extends Model
{
    protected $guarded = ['_token'];
    use HasFactory;
}
