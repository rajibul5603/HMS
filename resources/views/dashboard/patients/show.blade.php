@extends('dashboard.layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/dropify.css') }}">
@endpush

@section('title')
{{$patient->name}} | HMS
@endsection
@section('main')


<div class="container-fluid">
    {{-- <h1 class="mt-4">Users</h1> --}}
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">{{$patient->name}}</li>
    </ol>

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-users mr-1"></i>
                    Profile Picture
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <form class="col-md-12" action="{{route('patient.imageUp')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" class="dropify" data-default-file="{{asset('images/profile/avater.png')}}" data-height="250" id="img" name="profile_img" />

                            <input type="submit" class="btn btn-sm btn-success col-md-12" value="Save Profile">
                            {{-- <a class="btn btn-sm btn-success" href="{{route('users.edit',$patient->id)}}">Edit Details</a> --}}
                        </form>

                        <p class="col-md-12 mt-3 ml-2">Patient id: <strong>#000{{$patient->id}}</strong> </p>
                        <p class="col-md-12 ml-2">Mobile: <strong>{{$patient->mobile}}</strong> </p>
                        <div id="accordion" class="row mt-2">
                            <div class="col-md-12 p-0">
                                <div class="card-header">
                                    <a class="card-link" onclick="about();" href="#">
                                        About
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-12 p-0">
                                <div class="card-header">
                                    <a class="collapsed card-link" onclick="two();" href="#">
                                        Appointment List
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-12 p-0">
                                <div class="card-header">
                                    <a class="collapsed card-link" onclick="three();" href="#">
                                        Prescription
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-users mr-1"></i>
                    {{$patient->name}} info
                    <a href="#" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-plus-circle"></i>Add Appointment</a>
                </div>
                <div class="body">
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="about">

                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <th style="width: 20%;">Name</th>
                                                <td>: {{$patient->name}}</td>
                                                <th>Mobie</th>
                                                <td>: {{$patient->mobile}}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>: {{$patient->gmail}}</td>
                                                <th>Gender</th>
                                                <td>: {{$patient->gender}}</td>
                                            </tr>
                                            <tr>
                                                <th>Blood</th>
                                                <td>: {{$patient->blood}}</td>
                                                <th>dob</th>
                                                <td>: {{$patient->dob}}</td>
                                            </tr>
                                            <tr>
                                                <th>Occupation</th>
                                                <td>: {{$patient->occupation}}</td>
                                                <th>Religion</th>
                                                <td>: {{$patient->religion}}</td>
                                            </tr>

                                            <tr>
                                                <th>Marital</th>
                                                <td>: {{$patient->marital}}</td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td>: {{$patient->address}}</td>
                                            </tr>
                                            <tr>
                                                <th>Relative Contact</th>
                                                <td>: {{$patient->relative_contact}}</td>
                                            </tr>
                                            <tr>
                                                <th>Refarence by</th>
                                                <td>: {{$patient->refer}}</td>
                                            </tr>
                                            <tr>
                                                <th>Entry by</th>
                                                <td>: {{$patient->entry_by}}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <p style="float: right;">
                                        <a class="btn btn-sm btn-success" href="{{route('patient.edit',$patient->id)}}">Edit Details</a>
                                        <a class="btn btn-sm btn-success" onclick="window.print()" href="#">Print</a>
                                        {{-- <button type="button" name="button"></button> --}}
                                    </p>

                                </div>

                                <div id="two" class="collapse" data-parent="#accordion">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th style="width:10px!important;">SN.</th>
                                                    <th>Doctor</th>
                                                    <th>Specialist</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- {{dd($appointments)}} --}}
                                                @foreach ($appointments as $key=> $appointment )

                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>
                                                        @can('users.index')
                                                        <a href="{{route('users.show',$appointment->doc->id)}}">{{$appointment->doc->name}}</a>
                                                        @endcan
                                                    </td>
                                                    <td>{{$appointment->specialist}}</td>
                                                    <td>{{$appointment->date}}</td>
                                                    <td><span class="badge badge-success">visited</span></td>
                                                    <td style="text-align: center;">
                                                        @can('appointment.index')
                                                        <a href="#{{route('appointment.edit',$appointment->id)}}" class="btn btn-sm btn-info">Report</a>
                                                        @endcan
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <div id="three" class="collapse" data-parent="#accordion">
                                    <p>
                                    <h1>Prescription empty</h1>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection


        @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>
        <script>
            function about() {
                $('#about').attr('style', 'display:block');
                $('#two').attr('style', 'display:none');
                $('#three').attr('style', 'display:none');
            }

            function two() {
                $('#about').attr('style', 'display:none');
                $('#two').attr('style', 'display:block');
                $('#three').attr('style', 'display:none');
            }

            function three() {
                $('#about').attr('style', 'display:none');
                $('#two').attr('style', 'display:none');
                $('#three').attr('style', 'display:block');
            }
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
        @endpush