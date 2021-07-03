<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Auth\UserRole;

class User extends Model
{

    protected $guarded = ['_token','_password'];
    use HasFactory;

    public function userRole()
    {
        return $this->hasOne(UserRole::class);
    }



}
