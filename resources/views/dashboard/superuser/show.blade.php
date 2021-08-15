@extends('dashboard.layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/dropify.css') }}">

@endpush

@section('title')
{{$user->name}} | HMS
@endsection
@section('main')


<div class="container-fluid">
    {{-- <h1 class="mt-4">Users</h1> --}}
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">{{$user->name}}</li>

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
                        <form class="col-md-12" action="{{route('users.imageUp')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" class="dropify" data-default-file="{{asset('images/profile/avater.png')}}" data-height="250" id="img" name="profile_img" />

                            <input type="submit" class="btn btn-sm btn-success col-md-12" value="Save Profile">
                            {{-- <a class="btn btn-sm btn-success" href="{{route('users.edit',$user->id)}}">Edit Details</a> --}}
                        </form>

                        <div id="accordion" class="row mt-4">
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
                    Profile About
                    {{-- <a href="#" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-plus-circle"></i> Edit Profile</a> --}}
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
                                                <td>: {{$user->name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>: {{$user->email}}</td>
                                            </tr>
                                            <tr>
                                                <th>Birth of Date</th>
                                                <td>: {{$user->dob}}</td>
                                            </tr>
                                            <tr>
                                                <th>Gender</th>
                                                <td>: {{$user->gender}}</td>
                                            </tr>
                                            <tr>
                                                <th>Designation</th>
                                                <td>: {{$user->designation}}</td>
                                            </tr>
                                            <tr>
                                                <th>Salary</th>
                                                <td>: {{$user->salary}}</td>
                                            </tr>
                                            <tr>
                                                <th>Education</th>
                                                <td>: {{$user->education}}</td>
                                            </tr>
                                            <tr>
                                                <th>Permanent Address</th>
                                                <td>: {{$user->permanent_address}}</td>
                                            </tr>
                                            <tr>
                                                <th>Emergency Contact</th>
                                                <td>: {{$user->emergency_contact}}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <p style="float: right;">
                                        <a class="btn btn-sm btn-success" href="{{route('users.edit',$user->id)}}">Edit Details</a>
                                        <a class="btn btn-sm btn-success" href="#">Print</a>
                                    </p>

                                </div>

                                <div id="two" class="collapse" data-parent="#accordion">
                                    <p>
                                    <h1>Two</h1>
                                    salkjfdlkjcxb cxv cxb ccxbxcbxc bxcvb cxbvcxbcbcb bccbcbbxbxcb xcvbx f aslkjfasl jfak fjaslkfj askf safas fja sfjasbr
                                    salkjfdlkjcxb cxv cxb ccxbxcbxc bxcvb cxbvcxbcbcb bccbcbbxbxcb xcvbx f aslkjfasl jfak fjaslkfj askf safas fja sfjasbr
                                    salkjfdlkjcxb cxv cxb ccxbxcbxc bxcvb cxbvcxbcbcb bccbcbbxbxcb xcvbx f aslkjfasl jfak fjaslkfj askf safas fja sfjasbr
                                    salkjfdlkjcxb cxv cxb ccxbxcbxc bxcvb cxbvcxbcbcb bccbcbbxbxcb xcvbx f aslkjfasl jfak fjaslkfj askf safas fja sfjasbr
                                    salkjfdlkjcxb cxv cxb ccxbxcbxc bxcvb cxbvcxbcbcb bccbcbbxbxcb xcvbx f aslkjfasl jfak fjaslkfj askf safas fja sfjasbr
                                    bvx bcxb df cbvbcxbcxcxvb cxbvcxbcxb cxb xcbcxb cxbv cbcxvc bxcbcxbcxvxxdjsakl faskfj aslkfjasklf askjl
                                    bvx bcxb df cbvbcxbcxcxvb cxbvcxbcxb cxb xcbcxb cxbv cbcxvc bxcbcxbcxvxxdjsakl faskfj aslkfjasklf askjl
                                    bvx bcxb df cbvbcxbcxcxvb cxbvcxbcxb cxb xcbcxb cxbv cbcxvc bxcbcxbcxvxxdjsakl faskfj aslkfjasklf askjl
                                    bvx bcxb df cbvbcxbcxcxvb cxbvcxbcxb cxb xcbcxb cxbv cbcxvc bxcbcxbcxvxxdjsakl faskfj aslkfjasklf askjl
                                    bvx bcxb df cbvbcxbcxcxvb cxbvcxbcxb cxb xcbcxb cxbv cbcxvc bxcbcxbcxvxxdjsakl faskfj aslkfjasklf askjl
                                    </p>
                                </div>

                                <div id="three" class="collapse" data-parent="#accordion">
                                    <p>
                                    <h1>Three</h1>
                                    salkjfdlkjcxb cxv cxb ccxbxcbxc bxcvb cxbvcxbcbcb bccbcbbxbxcb xcvbx f aslkjfasl jfak fjaslkfj askf safas fja sfjasbr
                                    salkjfdlkjcxb cxv cxb ccxbxcbxc bxcvb cxbvcxbcbcb bccbcbbxbxcb xcvbx f aslkjfasl jfak fjaslkfj askf safas fja sfjasbr
                                    salkjfdlkjcxb cxv cxb ccxbxcbxc bxcvb cxbvcxbcbcb bccbcbbxbxcb xcvbx f aslkjfasl jfak fjaslkfj askf safas fja sfjasbr
                                    salkjfdlkjcxb cxv cxb ccxbxcbxc bxcvb cxbvcxbcbcb bccbcbbxbxcb xcvbx f aslkjfasl jfak fjaslkfj askf safas fja sfjasbr
                                    salkjfdlkjcxb cxv cxb ccxbxcbxc bxcvb cxbvcxbcbcb bccbcbbxbxcb xcvbx f aslkjfasl jfak fjaslkfj askf safas fja sfjasbr
                                    bvx bcxb df cbvbcxbcxcxvb cxbvcxbcxb cxb xcbcxb cxbv cbcxvc bxcbcxbcxvxxdjsakl faskfj aslkfjasklf askjl
                                    bvx bcxb df cbvbcxbcxcxvb cxbvcxbcxb cxb xcbcxb cxbv cbcxvc bxcbcxbcxvxxdjsakl faskfj aslkfjasklf askjl
                                    bvx bcxb df cbvbcxbcxcxvb cxbvcxbcxb cxb xcbcxb cxbv cbcxvc bxcbcxbcxvxxdjsakl faskfj aslkfjasklf askjl
                                    bvx bcxb df cbvbcxbcxcxvb cxbvcxbcxb cxb xcbcxb cxbv cbcxvc bxcbcxbcxvxxdjsakl faskfj aslkfjasklf askjl
                                    bvx bcxb df cbvbcxbcxcxvb cxbvcxbcxb cxb xcbcxb cxbv cbcxvc bxcbcxbcxvxxdjsakl faskfj aslkfjasklf askjl
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