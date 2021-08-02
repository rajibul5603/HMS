<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Specialist;
use App\Models\User;
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

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Gate::allows('appointment.index')){
            $code_name = Auth::user()->code_name;
            $data['appointments'] = Appointment::where('code_name', $code_name)->get();

            return view('dashboard.appointments.index',$data);
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function doctor()
    {
        // if(Gate::allows('appointment.doctor')){
            $code_name = Auth::user()->code_name;
            $id = Auth::user()->id;
            $data['appointments'] = Appointment::where('user_id', $id)->where('code_name', $code_name)->get();

            return view('dashboard.appointments.doctor',$data);
          // }
          // else{
          //     if(Auth::check()){
          //         // abort(403);
          //         return view('errors.error403');
          //     }
          //     else{
          //         return redirect('login');
          //     }
          // }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Gate::allows('appointment.create')){
            $code_name = Auth::user()->code_name;
            $data['appointments'] = Appointment::where('code_name', $code_name)->get();
            $data['doctors'] = User::where('designation', 'Doctor')->Where('code_name', $code_name)->get();
            $data['specialists'] = Specialist::all();
            // $data['specialists'] = Specialist::where('code_name', $code_name)->get();

            $data['patients'] = Patient::where('code_name', $code_name)->get();

            return view('dashboard.appointments.patients', $data);
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
        if(Gate::allows('appointment.create')){

          Appointment::create($request->all());

           return redirect(route('appointment.index'))->with('success', 'appointment created Successfully!!!');
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
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
