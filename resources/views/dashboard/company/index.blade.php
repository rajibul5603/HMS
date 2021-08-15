@extends('dashboard.layouts.app')

@section('title')
All Company List | HMS
@endsection

@section('main')

<div class="container-fluid">
    {{-- <h1 class="mt-4">Users</h1> --}}
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">Company list</li>

    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-users mr-1"></i>
            Company list
            <a href="{{route('superuser.create')}}" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-plus-circle"></i> Add User</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align: center;">
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Added At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companys as $key=> $company )

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$company->name}}</td>
                            <td>{{$company->email}}</td>
                            <td>{{$company->mobile}}</td>
                            <td>{{$company->created_at}}</td>

                            <td style="text-align:center;">
                                @can('users.index')
                                <a href="#" class="btn btn-sm btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                @endcan
                                @can('users.edit')
                                <a href="{{route('company.edit',$company->id)}}" class="btn btn-sm btn-success" data-toggle="tooltip" title="Edit"><i class="fa fa-pen"></i></a>
                                @endcan
                                @can('users.index')
                                <a href="#" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection