@extends('dashboard.layouts.app')
@section('title')
Forbidden Access Denied
@endsection
@section('main')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="text-align: center">
            <img src="{{asset('images/errors/403ErrorForbidden.gif')}}" alt="Errors 403">
        </div>
    </div>
</div>

@endsection