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
            <form enctype="multipart/form-data" @if (Route::currentRouteName()=='room.edit') action="{{route('room.update', $room->id)}}" method="post"
            @else action="{{route('room.store')}}" method="post"
            @endif >

            @csrf

            <input type="hidden" name="code_name" id="code_name" value="{{Auth::user()->code_name}}">

            <div class="row">

                <div class="col-md-12">
                    <x-form.input.select id="room" label="Room Group" otherattr="required" class="form-control form-control-sm" value="{{(isset($room->room) && $room->room!='')?$room->room :''}}">
                        <option value="{{(isset($room->room) && $room->room!='')?$room->room :''}}">{{(isset($room->room) && $room->room!='')?$room->room :'-- Select --'}}</option>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="O+">O+</option>
                        <option value="Other">Other</option>
                    </x-form.input.select>
                </div>

                <div class="col-md-12">
                    <x-form.input.date id="stored_date" label="Room Stored Date" class="form-control form-control-sm" placeholder="dd/mm/yyyy" value="{{(isset($room->stored_date) && $room->stored_date!='')?$room->stored_date :''}}" />
                </div>

                <div class="col-md-12">
                    <x-form.input.date id="expired_date" label="Room Stored Date" class="form-control form-control-sm" placeholder="dd/mm/yyyy" value="{{(isset($room->expired_date) && $room->expired_date!='')?$room->expired_date :''}}" />
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