<?php

namespace App\Http\Middleware;



use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

use App\Models\Auth\Permission;
use App\Models\Auth\User;
use App\Models\Auth\Role;
use App\Models\Auth\RolePermission;
use App\Models\Auth\UserRole;

class AuthGates
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

		if(Auth::check()){
        $user_id = Auth::id();
		if($role_id = UserRole::where('user_id',$user_id)->first()->role_id){
            $permissions = RolePermission::where('role_id',$role_id)->get('permission_id');
		$role = Role::find($role_id);
            //  Gate::define($role->slug,function(){
            //     return true;
            // });

            foreach ($permissions as $key => $permission) {
                $permission_data = Permission::find($permission->permission_id);
                Gate::define($permission_data->slug,function(){
                    return true;
                });
            }
        }
        }


        return $next($request);

    }
}
