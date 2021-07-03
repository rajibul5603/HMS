<?php

namespace App\Models\Auth;

use App\Models\Auth\RolePermission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public function rolePermissions()
    {
        return $this->hasMany(RolePermission::class, 'permission_id');
    }

    public function module()
    {
        return $this->hasOne(Module::class, 'id', 'module_id');
    }


}
