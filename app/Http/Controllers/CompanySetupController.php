<?php

namespace App\Http\Controllers;

use App\Models\CompanySetup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
class CompanySetupController extends Controller
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
            $data['companys'] = CompanySetup::orderBy('id', 'DESC')->get();

        return view('dashboard.company.index',$data);
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
            $data['company'] = CompanySetup::all();


            return view('dashboard.company.form',$data);
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
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanySetup  $companySetup
     * @return \Illuminate\Http\Response
     */
    public function show(CompanySetup $companySetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanySetup  $companySetup
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanySetup $company)
    {
        //
        if(Gate::allows('users.edit')){
            $data['company'] = $company;
            return view('dashboard.company.form', $data);
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
     * @param  \App\Models\CompanySetup  $companySetup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanySetup $companySetup)
    {
        //
        if(Gate::allows('users.edit')){

          // $this->validate($request, [
          //         'name' => 'required'
          //       ]);

              $company = CompanySetup::findOrFail($request->id);
              $company->update($request->all());

              return redirect(route('company.index'))->with('success', 'company Successfully Updated');
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
     * @param  \App\Models\CompanySetup  $companySetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanySetup $companySetup)
    {
        //
    }
}
