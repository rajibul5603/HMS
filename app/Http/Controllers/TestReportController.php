<?php

namespace App\Http\Controllers;

use App\Models\TestReport;
use App\Models\Patient;
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

class TestReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Gate::allows('testreport.index')){

          $method1 = request()->ip();
            dd("onkdashfss");
            return view('dashboard.testreport.index', $data);
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
        if(Gate::allows('testreport.create')){
            $code_name = Auth::user()->code_name;
            $data['patients'] = Patient::where('code_name', $code_name)->get();

            return view('dashboard.testreport.patients', $data);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestReport  $testReport
     * @return \Illuminate\Http\Response
     */
    public function show(TestReport $testReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestReport  $testReport
     * @return \Illuminate\Http\Response
     */
    public function edit(TestReport $testReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestReport  $testReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestReport $testReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestReport  $testReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestReport $testReport)
    {
        //
    }
}
