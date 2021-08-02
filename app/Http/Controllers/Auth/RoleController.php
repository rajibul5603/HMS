<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Auth\Module;
use App\Models\Auth\Permission;
use App\Models\Auth\Role;
use App\Models\Auth\RolePermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Gate::allows('role.index')){
            $data['roles'] = Role::where('status',1)->get();

            return view('dashboard.roles.index',$data);
        }
        else{
            if(Auth::check()){
                abort(403);
            }
            else{
                return redirect('login');
            }

        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Gate::allows('role.create')){
            $data['modules'] = Module::all();
            $data['permissions'] = Permission::all();
            return view('dashboard.roles.form',$data);
        }
        else{
            if(Auth::check()){
                abort(403);
            }
            else{
                return redirect('login');
            }

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $role = Role::create(['name'=>$request->name, 'slug'=>str_replace(' ','_',$request->name), 'status'=>1]);
        foreach($request->permissions as $permission)
        {
            RolePermission::create(['role_id'=>$role->id, 'permission_id'=>$permission]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auth\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auth\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //

        if(Gate::allows('role.edit')){
            $data['role'] = $role;
            $data['modules'] = Module::all();
            $data['permissions'] = Permission::all();
            return view('dashboard.roles.form',$data)->with('success', 'appointment created Successfully!!!');
        }
        else{
            if(Auth::check()){
                abort(403);
            }
            else{
                return redirect('login');
            }

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auth\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role, $id=null)
    {
        //
        $role::find($id)->update(['name'=>$request->name, 'slug'=>str_replace(' ','_',$request->name), 'status'=>1]);
        RolePermission::where('role_id',$id)->delete();
        foreach($request->permissions as $permission)
        {
            RolePermission::create(['role_id'=>$id, 'permission_id'=>$permission]);
        }
        return redirect(route('role.index'))->with('success', 'Role update Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auth\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}
