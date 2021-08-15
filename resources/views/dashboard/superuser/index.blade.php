@extends('dashboard.layouts.app')

@section('title')
All Users | HMS
@endsection

@section('main')

<div class="container-fluid">
    {{-- <h1 class="mt-4">Users</h1> --}}
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">Users</li>

    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-users mr-1"></i>
            Users
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
                            <th>Role</th>
                            <th>Added At</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key=> $user )

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{(isset($user->userRole->role->name))?$user->userRole->role->name:"No Role"}}</td>
                            <td>{{$user->created_at}}</td>
                            <td style="text-align:center;">
                                <span style="color:white;" class="badge bg-{{($user->status !=0)? 'success' :'danger'}}">{{($user->status !=0)? 'Active' :'Inactive'}}</span>
                            </td>
                            <td style="text-align:center;">
                                @can('users.index')
                                <a href="{{route('users.show',$user->id)}}" class="btn btn-sm btn-info" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                @endcan
                                @can('users.index')
                                <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-success" data-toggle="tooltip" title="Edit"><i class="fa fa-pen"></i></a>
                                @endcan
                                @can('users.index')
                                <a href="{{route('users.destroy',$user->id)}}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
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