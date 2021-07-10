@extends('dashboard.layouts.app')
@section('title')
{{Auth::User()->name}} Profile | HMS
@endsection
@section('main')


<div class="container-fluid">
    {{-- <h1 class="mt-4">Users</h1> --}}
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">{{Auth::User()->name}} Profile</li>

    </ol>


    <div class="card">
        <div class="card-header">
            <i class="fa fa-users mr-1"></i>
            Users
            <a href="#" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-plus-circle"></i> Edit Profile</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <div class="text-center">
                        <img style="width:50%" src="{{asset('images/profile/avater.png')}}" class="rounded" alt="...">
                    </div>
                </div>
                <div class="col-md-8">
                    asfdsafasfasdafasdf
                </div>
            </div>
        </div>
    </div>
</div>

@endsection