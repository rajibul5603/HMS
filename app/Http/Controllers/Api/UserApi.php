<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Auth\User;
use Illuminate\Support\Facades\Auth;

class UserApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if(Gate::allows('users.index')){
            $user = User::select('id', 'name', 'email', 'status')->get();
            foreach ($user as $key => $value) {
                $data[$key]=$value;
                $data[$key]['role']=User::find($value->id)->userRole->role->name;
            }
            return json_encode($data);
        }
        else{

            $email = $request->email;
            $password = $request->password;
            Auth::attempt(['email'=>$email,'password'=>$password]);
            return redirect('api/users');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function isCodeValid($code)
    {
        $user=User::where('code_name',$code)->first();
        if($user!=null){
            return "0";
        }
        else{
            return '1';
        }

    }
}
