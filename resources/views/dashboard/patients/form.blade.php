@extends('dashboard.layouts.app')

@section('title')
Patient Form | HMS
@endsection

@section('main')

{{-- {{dd(Storage::url('products_img'))}} --}}
<div class="container-fluid">
    <h1 class="mt-4">
        @if (Route::currentRouteName()=='patient.edit')Edit
        @else Add
        @endif Patient
    </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">
            @if (Route::currentRouteName()=='patient.edit')Edit
            @else Add
            @endif Patient
        </li>

    </ol>
    <div class="card" style="max-width: 1000px; margin: auto; padding: 10px 20px;">
        <form enctype="multipart/form-data" @if (Route::currentRouteName()=='patient.edit') action="{{route('patient.update',$patient->id)}}" method="post"
        @else action="{{route('patient.store')}}" method="post"
        @endif >

        @csrf

        {{-- <input type="hidden" name="id" id="id" value="{{Auth::id()}}"> --}}
        <input type="hidden" name="code_name" id="code_name" value="{{Auth::user()->code_name}}">

        <div class="row">

            <div class="col-md-4">
                <x-form.input.text id="name" label="Name" otherattr="required" class="form-control form-control-sm" placeholder="Patient Name" value="{{(isset($patient->name)!='')?$patient->name :''}}" />
            </div>

            <div class="col-md-4">
                <x-form.input.number id="mobile" label="Mobile" otherattr="required pattern=[0-9]{11} maxlength=11" class="form-control form-control-sm" placeholder="Patient Mobile" value="{{(isset($patient->mobile)!='')?$patient->mobile :''}}" />
            </div>

            <div class="col-md-4">
                <x-form.input.select id="gender" label="Gender" otherattr="required" class="form-control form-control-sm" value="{{(isset($patient->gender) && $patient->gender!='')?$patient->gender :''}}">
                    <option value="{{(isset($patient->gender) && $patient->gender!='')?$patient->gender :''}}">{{(isset($patient->gender) && $patient->gender!='')?$patient->gender :'-- Select --'}}</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </x-form.input.select>
            </div>

            <div class="col-md-4">
                <x-form.input.email id="gmail" label="Gmail" class="form-control form-control-sm" placeholder="Patient Gmail" value="{{(isset($patient->gmail)!='')?$patient->gmail :''}}" />
            </div>

            <div class="col-md-4">
                <x-form.input.text id="refer" label="Refer Doctor/Hospital" class="form-control form-control-sm" placeholder="Patient Refer Doctor/Hospital" value="{{(isset($patient->refer)!='')?$patient->refer :''}}" />
            </div>

            <div class="col-md-4">
                <x-form.input.select id="blood" label="Blood Group" class="form-control form-control-sm" value="{{(isset($patient->blood) && $patient->blood!='')?$patient->blood :''}}">
                    <option value="{{(isset($patient->blood) && $patient->blood!='')?$patient->blood :''}}">{{(isset($patient->blood) && $patient->blood!='')?$patient->blood :'-- Select --'}}</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="O+">O+</option>
                    <option value="Other">Other</option>
                </x-form.input.select>
            </div>

            <div class="col-md-4">
                <x-form.input.date id="dob" label="Date of Birth" class="form-control form-control-sm" placeholder="dd/mm/yyyy" value="{{(isset($patient->dob) && $patient->dob!='')?$patient->dob :''}}" />
            </div>

            <div class="col-md-4">
                <x-form.input.text id="occupation" label="Occupation" class="form-control form-control-sm" placeholder="Patient Occupation" value="{{(isset($patient->occupation)!='')?$patient->occupation :''}}" />
            </div>


            <div class="col-md-4">
                <x-form.input.select id="religion" label="Religion" otherattr="required" class="form-control form-control-sm" value="{{(isset($patient->religion) && $patient->religion!='')?$patient->religion :''}}">
                    <option value="{{(isset($patient->religion) && $patient->religion!='')?$patient->religion :''}}">{{(isset($patient->religion) && $patient->religion!='')?$patient->religion :'-- Select --'}}</option>
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Nastik">Nastik</option>
                    <option value="Other">Other</option>
                </x-form.input.select>
            </div>

            <div class="col-md-4">
                <x-form.input.textarea id="p_note" label="Patient Short Note" rows="4" class="form-control form-control-sm" placeholder="Short description of the disease"
                  value="{{(isset($patient->p_note) && $patient->p_note!='')?$patient->p_note :''}}" />
            </div>

            <div class="col-md-4">
                <x-form.input.textarea id="address" label="Address (Short)" rows="4" class="form-control form-control-sm" placeholder="Patient contact address" value="{{(isset($patient->address) && $patient->address!='')?$patient->address :''}}" />
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <x-form.input.select id="marital" label="Marital" class="form-control form-control-sm" value="{{(isset($patient->marital) && $patient->marital!='')?$patient->marital :''}}">
                            <option value="{{(isset($patient->marital) && $patient->marital!='')?$patient->marital :''}}">{{(isset($patient->marital) && $patient->marital!='')?$patient->marital :'-- Select --'}}</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorce">Divorce</option>
                            <option value="Other">Other</option>
                        </x-form.input.select>
                    </div>
                    <div class="col-md-12">
                        <x-form.input.number id="relative_contact" label="Emergency Contact for Relative" pattern=[0-9]{11} maxlength=11 class="form-control form-control-sm" placeholder="Mobile Number for emergency contact"
                          value="{{(isset($patient->relative_contact)!='')?$patient->relative_contact :''}}" />
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-3 pr-0" style="float:right;">
            <input id="submit" type="submit" class="form-control form-control-sm btn btn-success pt-0" value="submit">
        </div>
        </form>
    </div>
</div>
@endsection