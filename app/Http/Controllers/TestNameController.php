<?php

namespace App\Http\Controllers;

use App\Models\TestName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\Support\Facades\Auth;

class TestNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Gate::allows('room.index')){

          $code_name = Auth::user()->code_name;
          $data['rooms'] = Room::where('code_name', $code_name)->get();

            return view('dashboard.rooms.index', $data);
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
        if(Gate::allows('testname.create')){

          TestName::create($request->all());

           return redirect(route('testname.index'))->with('success', 'Test Name created Successfully!!!');
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
     * @param  \App\Models\TestName  $testName
     * @return \Illuminate\Http\Response
     */
    public function show(TestName $testName)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestName  $testName
     * @return \Illuminate\Http\Response
     */
    public function edit(TestName $testName)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestName  $testName
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestName $testName)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestName  $testName
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestName $testName)
    {
        //
    }
}
