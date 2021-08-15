<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CompanySetup;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Auth\Permission;
use App\Models\Auth\Role;
use App\Models\Auth\UserRole;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class SuperUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Gate::allows('users.index')){
            $data['users'] = User::where('status',1)->get();

        return view('dashboard.superuser.index', $data);
        }
        else{
            if(Auth::check()){
                // abort(403);
                return view('errors.error403');
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
        if(Gate::allows('users.create')){
            // $data['users'] = User::all();
            $data['roles'] = Role::all();


            return view('dashboard.superuser.form',$data);
        }
        else{
            if(Auth::check()){
                // abort(403);
                return view('errors.error403');
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
        if(Gate::allows('users.create')){
            $request->merge([
                'password' => Hash::make($request->_password),
                'ip' => request()->ip(),
            ]);
            $role = $request->_role;
            $request->request->remove('_role');


         $last = User::create($request->all());
         CompanySetup::create(["user_id" => $last->id, "code_name" => $last->code_name]);
         UserRole::create(["user_id"=>$last->id, "role_id"=> $role]);
         return redirect(route('dashboard.company.index'))->with('success', 'User created Successfully!!! Now Company Setup!!!');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuperUser  $superUser
     * @return \Illuminate\Http\Response
     */
    public function show(SuperUser $superUser)
    {
        //
        if(Gate::allows('users.show')){
            $data['user'] = $superUser;

        return view('dashboard.superuser.show',$data);
        }
        else{
            if(Auth::check()){
                // abort(403);
                return view('errors.error403');
            }
            else{
                return redirect('login');
            }

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuperUser  $superUser
     * @return \Illuminate\Http\Response
     */
    public function edit(SuperUser $superUser)
    {
        //
        if(Gate::allows('users.edit')){
            $data['users'] = $superUser;
            $data['roles'] = Role::all();

            return view('dashboard.superuser.form',$data);
        }
        else{
            if(Auth::check()){
                // abort(403);
                return view('errors.error403');
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
     * @param  \App\Models\SuperUser  $superUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuperUser $superUser)
    {
        //
        if(Gate::allows('users.edit')){

          // $this->validate($request, [
          //         'name' => 'required'
          //       ]);

              $patient = User::findOrFail($request->id);
              $patient->update($request->all());

              return redirect(route('superuser.index'))->with('success', 'User Successfully Updated');
        }
        else{
            if(Auth::check()){
                // abort(403);
                return view('errors.error403');
            }
            else{
                return redirect('login');
            }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuperUser  $superUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuperUser $superUser)
    {
        //
    }
}
