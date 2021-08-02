@extends('dashboard.layouts.app')

@section('title')
Room Form | HMS
@endsection

@section('main')

{{-- {{dd(Storage::url('products_img'))}} --}}
<div class="container-fluid">
    <h1 class="mt-4">
        @if (Route::currentRouteName()=='room.edit')Edit
        @else Add
        @endif Room
    </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">
            @if (Route::currentRouteName()=='room.edit')Edit
            @else Add
            @endif Room
        </li>

    </ol>
    <div class="row">

        <div class="col-md-5 card" style="max-width: 1000px; margin: auto; padding: 10px 20px;">
            <form enctype="multipart/form-data" @if (Route::currentRouteName()=='room.edit') action="{{route('room.update',$room->id)}}" method="post"
            @else action="{{route('room.store')}}" method="post"
            @endif >

            @csrf

            <input type="hidden" name="entry_by" id="id" value="{{Auth::user()->name}}">
            <input type="hidden" name="code_name" id="code_name" value="{{Auth::user()->code_name}}">

            <div class="row">

                <div class="col-md-12">
                    <x-form.input.text id="floor_name" label="Floor Number" otherattr="required" class="form-control form-control-sm" placeholder="Floor Number" value="{{(isset($room->floor_name)!='')?$room->floor_name :''}}" />
                </div>

                <div class="col-md-6">
                    <x-form.input.text id="room_no" label="Room Number" otherattr="required" class="form-control form-control-sm" placeholder="Room Number" value="{{(isset($room->room_no)!='')?$room->room_no :''}}" />
                </div>

                <div class="col-md-6">
                    <x-form.input.text id="no_of_bad" label="Number of Bad" class="form-control form-control-sm" placeholder="Number of Bad" value="{{(isset($room->no_of_bad)!='')?$room->no_of_bad :''}}" />
                </div>

                <div class="col-md-6">
                    <x-form.input.select id="room_type" label="Room Type" otherattr="required" class="form-control form-control-sm" value="{{(isset($room->room_type) && $room->room_type!='')?$room->room_type :''}}">
                        <option value="{{(isset($room->room_type) && $room->room_type!='')?$room->room_type :''}}">{{(isset($room->room_type) && $room->room_type!='')?$room->room_type :'-- Select --'}}</option>
                        <option value="Non AC">Non AC Room</option>
                        <option value="Ac Room">Ac Room</option>
                        <option value="Other">Other</option>
                    </x-form.input.select>
                </div>

                <div class="col-md-6">
                    <x-form.input.select id="status" label="Status" otherattr="required" class="form-control form-control-sm" value="{{(isset($room->status) && $room->status!='')?$room->status :''}}">
                        <option value="{{(isset($room->status) && $room->status!='')?$room->status :''}}">{{(isset($room->status) && $room->status!='')?$room->status :'-- Select --'}}</option>
                        <option value="Active">Active</option>
                        <option value="Deactive">Deactive</option>
                    </x-form.input.select>
                </div>

                <div class="col-md-12">
                    <x-form.input.text id="price" label="Par Day Bad Price" class="form-control form-control-sm" placeholder="Per Day Bad Price" value="{{(isset($room->price)!='')?$room->price :''}}" />
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