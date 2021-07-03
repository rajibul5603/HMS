<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
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


class UserController extends Controller
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

        return view('dashboard.users.index',$data);
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
        if(Gate::allows('users.create')){
            // $data['users'] = User::all();
            $data['roles'] = Role::all();

            return view('dashboard.users.form',$data);
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

        if(Gate::allows('users.create')){
            if($file = $request->file('_userimage')) {
                $filename =  $request->code. '.' . $file->getClientOriginalExtension();
                $directory = (Storage::path("public/profile-photos"));
                $location = (Storage::path("public/profile-photos/"));
                $link = $filename;
                dd($directory);
                if(!File::exists($directory)){
                    File::makeDirectory($directory, 0755, true, true);
                }
                // $file->move($directory,$filename);
                // Image::make($file)->save($location);
                /* Resize and save image */
                Image::make($file)->resize(800, 800, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($location.'/'.$filename);

                $request->merge([
                    'image' => $link,
                ]);
            }
            $request->merge([
                'password' => Hash::make($request->_password),
            ]);
            $role = $request->_role;
            $request->request->remove('_role');

            // dd($role);
         $last = User::create($request->all());
         UserRole::create(["user_id"=>$last->id, "role_id"=> $role]);
         return redirect(route('users.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
