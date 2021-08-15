@extends('dashboard.layouts.app')
@section('main')
<div class="container-fluid">
    <h5 class="mt-4">
        @if (Route::currentRouteName()=='company.edit')Edit
        @else Add
        @endif Company Information
    </h5>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">
            @if (Route::currentRouteName()=='company.edit')Edit
            @else Add
            @endif Company Information
        </li>

    </ol>
    <div class="card" style="max-width: 1000px; margin: auto; padding: 10px 20px;">
        <form id="userForm" @if (Route::currentRouteName()=='company.edit') action="{{route('company.update',$company->id)}}" method="post"
        @else action="{{route('company.store')}}" method="post"
        @endif >
        @csrf
        <input type="hidden" name="entry_by" value="{{Auth::User()->name}}">
        <div class="row">
            <div class="col-md-4">
                <x-form.input.text id="name" label="Company Name" otherattr="required" class="form-control form-control-sm " placeholder="Company Name" value="{{(isset($compay->name) && $compay->name !='')?$compay->name :''}}" />
            </div>
            <div class="col-md-4">
                <x-form.input.text id="slogan" label="Company Slogan" otherattr="required" class="form-control form-control-sm " placeholder="Company Slogan" value="{{(isset($compay->slogan) && $compay->slogan !='')?$compay->slogan :''}}" />
            </div>
            <div class="col-md-4">
                <x-form.input.text id="mobile" label="Company Mobile" otherattr="required" class="form-control form-control-sm " placeholder="Company Slogan" value="{{(isset($compay->mobile) && $compay->mobile !='')?$compay->mobile :''}}" />
            </div>
            <div class="col-md-4">
                <x-form.input.text id="phone" label="Company Phone" otherattr="required" class="form-control form-control-sm " placeholder="Company Slogan" value="{{(isset($compay->phone) && $compay->phone !='')?$compay->phone :''}}" />
            </div>
            <div class="col-md-4">
                <x-form.input.email id="email" label="Email" otherattr="required" class="form-control form-control-sm" placeholder="username@email.com" value="{{(isset($compay->email) && $compay->email !='')?$compay->email :''}}"/>
            </div>
            <div class="col-md-4">
                <x-form.input.text id="fax" label="Company Fax" otherattr="required" class="form-control form-control-sm" placeholder="username@fax.com" value="{{(isset($compay->fax) && $compay->fax !='')?$compay->fax :''}}"/>
            </div>
            <div class="col-md-4">
                <x-form.input.text id="web" label="Web site" otherattr="required" class="form-control form-control-sm" placeholder="username@fax.com" value="{{(isset($compay->web) && $compay->web !='')?$compay->web :''}}"/>
            </div>
            <div class="col-md-4">
                <x-form.input.text id="web" label="Company Logo" otherattr="required" class="form-control form-control-sm" placeholder="username@fax.com" value="{{(isset($compay->web) && $compay->web !='')?$compay->web :''}}"/>
            </div>
            <div class="col-md-4">
                <x-form.input.text id="web" label="Company Logo" otherattr="required" class="form-control form-control-sm" placeholder="username@fax.com" value="{{(isset($compay->web) && $compay->web !='')?$compay->web :''}}"/>
            </div>
        </div>
        <div class="col-md-4 text-center" style="margin: auto;"><input type="submit" class="btn btn-success" value="Submit"></div>
        </form>

    </div>

    @endsection
    @push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
    @endpush
    @push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>
    <script>
        $(".select2_dd").select2({
            theme: 'bootstrap4',
        });
    </script>
    <script>
        // $(".dropify").dropify();
        $('.dropify').dropify({
            messages: {
                'default': '<p style="font-size:15px;">Drag and drop a file here or click</p>',
                'replace': '<p style="font-size:15px;">Drag and drop or click to replace</p>',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
    </script>

    <script>
        var input = document.getElementById('code_name');
        var url1 = "{{route('users.codecheck','thecode')}}";
        input.onkeyup = function() {
            this.value = this.value.toUpperCase();
            url = url1.replace('thecode', this.value);
            if (this.value.length == 3) {
                $.get(url,
                    function(data, textStatus, jqXHR) {
                        console.log(data);
                        if (data == 0) {
                            alert("The Code is not AVAILABLE.\nTry another CODE");
                            document.getElementById('code_name').value = null;
                        }
                    },
                );
            }

        }
    </script>
    @endpush