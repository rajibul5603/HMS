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

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-users mr-1"></i>
                    Profile Picture
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="text-center mt-4">
                            <img class="card-img-top" style="width: 70%;" src="{{asset('images/profile/avater.png')}}" alt="Card image cap">
                        </div>
                        <div id="accordion" class="row mt-4">
                            <div class="col-md-12 p-0">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                        About
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-12 p-0">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                        Appointment List
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-12 p-0">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                        Prescription
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-8">
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
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <p>
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

                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <p>
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

                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <p>
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