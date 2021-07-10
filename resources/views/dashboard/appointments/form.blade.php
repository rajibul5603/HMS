@extends('dashboard.layouts.app')

@section('main')


{{-- {{dd(Storage::url('products_img'))}} --}}
<div class="container-fluid">
    <h1 class="mt-4">
        @if (Route::currentRouteName()=='blood.edit')Edit
        @else Add
        @endif Appointment
    </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">
            @if (Route::currentRouteName()=='blood.edit')Edit
            @else Add
            @endif Appointment
        </li>

    </ol>
    <div class="row">
        <div class="col-md-6 card" style="max-width: 1000px; margin: auto; padding: 10px 20px;">
            <form enctype="multipart/form-data" @if (Route::currentRouteName()=='blood.edit') action="{{route('blood.update', $blood->id)}}" method="post"
            @else action="{{route('blood.store')}}" method="post"
            @endif >

            @csrf

            {{-- <input type="hidden" name="id" id="id" value="{{Auth::id()}}"> --}}

            <div class="row">

                <div class="col-md-6">
                    <x-form.input.date id="date" label="Appointment Date" class="form-control form-control-sm" placeholder="dd/mm/yyyy" value="{{(isset($appointment->date) && $appointment->date!='')?$appointment->date :''}}" />
                </div>

                <div class="col-md-6">
                    <x-form.input.time id="timePicker" label="Appointment Time" class="form-control form-control-sm" placeholder="dd/mm/yyyy" value="{{(isset($appointment->date) && $appointment->date!='')?$appointment->date :''}}" />
                </div>


                <div class="col-md-12">
                    <x-form.input.select id="specialist" label="Specialist" otherattr="required" class="form-control form-control-sm">
                        <option value="{{(isset($appointment->user->name) && $appointment->user->name!='')?$appointment->user->name :''}}">{{(isset($appointment->user->name) && $appointment->user->name!='')?$appointment->user->name :'-- Select --'}}
                        </option>
                        @foreach ($specialists as $specialist)
                        <option value="{{$specialist->id}}">{{$specialist->name}}</option>
                        @endforeach
                    </x-form.input.select>
                </div>

                <div class="col-md-12">
                    <x-form.input.select id="user_id" label="Doctor" otherattr="required" class="form-control form-control-sm">
                        <option value="{{(isset($appointment->user->name) && $appointment->user->name!='')?$appointment->user->name :''}}">{{(isset($appointment->user->name) && $appointment->user->name!='')?$appointment->user->name :'-- Select --'}}
                        </option>
                        @foreach ($doctors as $doctor)
                        <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                        @endforeach
                    </x-form.input.select>
                </div>

                <div class="col-md-6">
                    <x-form.input.number id="fees" label="Fees" class="form-control form-control-sm" placeholder="Fees " value="{{(isset($appointment->time) && $appointment->time!='')?$appointment->time :''}}" />
                </div>

                <div class="col-md-6">
                    <x-form.input.select id="meet" label="No of Appointment" otherattr="required" class="form-control form-control-sm">
                        <option value="{{(isset($appointment->user->name) && $appointment->user->name!='')?$appointment->user->name :''}}">{{(isset($appointment->user->name) && $appointment->user->name!='')?$appointment->user->name :'-- Select --'}}
                        </option>
                        <option value="1st Appointment">1st Appointment</option>
                        <option value="2nd Appointment">2nd Appointment</option>
                        <option value="3th Appointment">3th Appointment</option>
                        <option value="4th Appointment">4th Appointment</option>
                        <option value="5th Appointment">5th Appointment</option>
                        <option value="6th Appointment">6th Appointment</option>
                        <option value="7th Appointment">7th Appointment</option>
                        <option value="8th Appointment">8th Appointment</option>
                        <option value="9th Appointment">9th Appointment</option>
                        <option value="10th Appointment">10th Appointment</option>
                        <option value="More Appointment">More Appointment</option>
                    </x-form.input.select>
                </div>



            </div>

            <div class="col-md-3 pr-0" style="float:right;">
                <input id="submit" type="submit" class="form-control form-control-sm btn btn-success pt-0" value="submit">
            </div>
            </form>
        </div>
    </div>

</div>
@endsection