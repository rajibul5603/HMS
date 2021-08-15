<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Appointment;
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


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
        if(Gate::allows('patient.index')){

          $code_name = Auth::user()->code_name;
          $data['patients'] = Patient::where('code_name', $code_name)->get();

            return view('dashboard.patients.index', $data);
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
        if(Gate::allows('patient.create')){

          $data['patient'] = Patient::all();

            return view('dashboard.patients.form', $data);
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
        // dd($request->all());

        if(Gate::allows('patient.create')){

          Patient::create($request->all());

          return redirect(route('patient.index'))->with('success', 'Patient created Successfully!!!');
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
     * @param  \App\Models\Patient  $patients
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
        if(Gate::allows('patient.show')){
            $data['patient'] = $patient;
            $data['appointments'] = Appointment::where('patient_id', ($patient->id))->get();

        return view('dashboard.patients.show',$data);
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

    public function imageUp(Request $request)
    {

      if($file = $request->file('_profile_img')) {
          $filename =  $request->code. '.' . $file->getClientOriginalExtension();
          $directory = (Storage::path("images/profile"));
          $location = (Storage::path("images/profile/"));
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

          $user = Auth::User();
          $user->profile_photo_path = $link;
          $user->save();
          dd("boos done!");
      }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patients
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
        if(Gate::allows('patient.edit')){
            $data['patient'] = $patient;

            return view('dashboard.patients.form',$data);
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
     * @param  \App\Models\Patient  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient, $id=null)
    {
          //
          if(Gate::allows('blood.edit')){

            $this->validate($request, [
                    'name' => 'required'
                  ]);

                $patient = Patient::findOrFail($request->id);
                $patient->update($request->all());

                return redirect(route('patient.index'))->with('success', 'Patient Successfully Updated');
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
     * @param  \App\Models\Patient  $patients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patients)
    {
        //
    }
}
