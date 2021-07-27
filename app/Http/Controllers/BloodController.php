<?php

namespace App\Http\Controllers;

use App\Models\Blood;
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

class BloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Gate::allows('blood.index')){
            $code_name = Auth::user()->code_name;
            $data['bloods'] = Blood::where('code_name', $code_name)->get();

          return view('dashboard.bloods.index',$data);
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
        if(Gate::allows('blood.create')){
          $code_name = Auth::user()->code_name;
          $data['bloods'] = Blood::where('code_name', $code_name)->get();
            return view('dashboard.bloods.form',$data);
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
        if(Gate::allows('blood.create')){

          Blood::create($request->all());

           return redirect(route('blood.index'))->with('success', 'blood created Successfully!!!');
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
     * @param  \App\Models\Blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function show(Blood $blood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function edit(Blood $blood)
    {
        if(Gate::allows('blood.edit')){
            $data['blood'] = $blood;
            // dd($data);
            return view('dashboard.bloods.form',$data);
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
     * @param  \App\Models\Blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blood $blood)
    {
        //
        if(Gate::allows('blood.edit')){

          $this->validate($request, [
                  'blood' => 'required',
                  'stored_date' => 'required',
                  ],
                  [
                    'blood.required' => 'Group fild is required',
                    'stored_date.required' => 'stored_date fild is required',
                  ]);

              $blood = Blood::findOrFail($request->id);
              $blood->update($request->all());

              return redirect(route('blood.index'))->with('success', 'Blood Successfully Updated!!!');
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
     * @param  \App\Models\Blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blood $blood)
    {
      if(Gate::allows('blood.destroy')){
          $data['blood'] = $blood;
          dd($data);
          return view('dashboard.bloods.form',$data);
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

      dd(" tesjkadlja fkashfajk fhasjkf ask destroy");
      dd($blood);
      $blood = Blood::find($id);
      $blood -> delete();
    }
}
