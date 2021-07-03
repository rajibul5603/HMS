<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = ['_token'];
    use HasFactory;

    public function userRole()
    {
        return $this->hasMany(UserRole::class);
    }

    public function rolePermissions()
    {
        return $this->hasMany(RolePermission::class);
    }


}
