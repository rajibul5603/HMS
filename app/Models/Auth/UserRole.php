<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'role_id',
    ];

    public function role()
    {
        return $this->hasOne(Role::class, 'id','role_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
