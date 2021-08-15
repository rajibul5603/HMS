@extends('dashboard.layouts.app')
@section('main')
<div class="container-fluid">
    <h1 class="mt-4">
        @if (Route::currentRouteName()=='superuser.edit')Edit
        @else Add
        @endif User
    </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">
            @if (Route::currentRouteName()=='superuser.edit')Edit
            @else Add
            @endif User
        </li>

    </ol>
    <div class="card" style="max-width: 1000px; margin: auto; padding: 10px 20px;">
        <form id="userForm" @if (Route::currentRouteName()=='superuser.edit') action="{{route('user.update',$users->id)}}" method="post"
        @else action="{{route('superuser.store')}}" method="post"
        @endif >
        @csrf
        <div class="row">
            <div class="col-md-4">
                <x-form.input.text id="name" label="Name" otherattr="required" class="form-control form-control-sm " placeholder="Full Name" value="{{(isset($users->name) && $users->name !='')?$users->name :''}}" />
            </div>
            <div class="col-md-4">
                <x-form.input.email id="email" label="Email" otherattr="required" class="form-control form-control-sm" placeholder="username@email.com" value="{{(isset($users->email) && $users->email !='')?$users->email :''}}"/>
            </div>
            <div class="col-md-4">
                <x-form.input.text id="code_name" label="Code" otherattr="required pattern=[A-Z]{5} maxlength=5 tooltip= Unique&nbsp;5&nbsp;letter&nbsp;code" class="form-control form-control-sm" placeholder="CODES"
                  value="{{(isset($users->code_name) && $users->code_name!='')?$users->code_name :''}}" />
            </div>
            <div class="col-md-4">
                <x-form.input.password id="_password" label="Password" otherattr="required" class="form-control form-control-sm" placeholder="Password" value="" />
            </div>
            <div class="col-md-4">
                <x-form.input.text id="password_hint" label="Password Hint" class="form-control form-control-sm" placeholder="Password Hint" value="{{(isset($users->password_hint) && $users->password_hint !='')?$users->password_hint :''}}" />
            </div>
            <div class="col-md-4">
                <x-form.input.date id="dob" label="Date of Birth" otherattr="required" class="form-control form-control-sm" placeholder="dd/mm/yyyy" value="{{(isset($users->dob) && $users->dob!='')?$users->dob :''}}" />
            </div>
            <div class="col-md-4">
                <x-form.input.select id="gender" label="Gender" otherattr="required" class="form-control form-control-sm" value="{{(isset($users->gender) && $users->gender!='')?$users->gender :''}}">
                    <option value="{{(isset($users->gender) && $users->gender!='')?$users->gender :''}}">{{(isset($users->gender) && $users->gender!='')?$users->gender :'Select'}}</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </x-form.input.select>
            </div>

            <div class="col-md-4">
                <x-form.input.text id="designation" label="Designation" otherattr="required" class="form-control form-control-sm " placeholder="Enter your designation"
                  value="{{(isset($users->designation) && $users->designation !='')?$users->designation :''}}" />
            </div>


            <div class="col-md-4">
                <x-form.input.currency id="salary" label="Salary" class="form-control form-control-sm" placeholder="Salary" value="{{(isset($users->salary) && $users->salary!='')?$users->salary :''}}" />
            </div>
            <div class="col-md-4">
                <x-form.input.textarea id="education" label="Education (Short)" rows="5" class="form-control form-control-sm" placeholder="SSC, HSC" value="{{(isset($users->education) && $users->education!='')?$users->education :''}}" />
            </div>
            <div class="col-md-4">
                <x-form.input.textarea id="permanent_address" label="Permanent Address" rows="5" class="form-control form-control-sm" placeholder="Permanent Address"
                  value="{{(isset($users->permanent_address) && $users->permanent_address!='')?$users->permanent_address :''}}" />
            </div>
            <div class="col-md-4">
                <x-form.input.textarea id="emergency_contact" label="Emergency Contact" rows="5" class="form-control form-control-sm" placeholder="Emergency Contact"
                  value="{{(isset($users->emergency_contact) && $users->emergency_contact!='')?$users->emergency_contact :''}}" />
            </div>

            <div class="col-md-12">
                <x-form.input.textarea id="remarks" label="Remarks" rows="8" class="form-control form-control-sm" placeholder="Remarks" value="{{(isset($users->remarks) && $users->remarks!='')?$users->remarks :''}}" />
            </div>

            <div class="col-md-12">
                <x-form.input.select id="_role" label="Role" otherattr="required" class="form-control form-control-sm" value="{{(isset($users->userRole) && $users->userRole!='')?$users->userRole->id :''}}">
                    <option value="">Select</option>
                    @foreach ($roles as $role)
                    <option value="{{$role->id}}" {{(isset($users->userRole) && $users->userRole!='')?$users->userRole->id : ""}}>{{$role->name}}</option>
                    @endforeach
                </x-form.input.select>
            </div>
            {{-- <div class="col-md-4">
                <x-form.input.dropify id="_userimage" label="Profile Photo" class="form-control form-control-sm"  default="{{(isset($users->profile_photo_path) && $user->profile_photo_path !='')?asset('profile_img/'.$user->profile_photo_path):asset('img/defaultproduct.png')}}"
            />
        </div> --}}
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