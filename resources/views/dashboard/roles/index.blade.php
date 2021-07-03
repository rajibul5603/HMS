@extends('dashboard.layouts.app')
@section('main')


                    <div class="container-fluid">
                        <h1 class="mt-4">Roles</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active">Roles</li>

                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fa fa-users mr-1"></i>
                                Roles
                                <a href="{{route('role.create')}}" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-plus-circle"></i> Add Role</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Sl.</th>
                                                <th>Role</th>
                                                <th>Permissions</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($roles as $key=> $role )

                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$role->name}}</td>
                                                <td>@foreach ($role->rolePermissions as $permission)
                                                    <span class="badge badge-info">{{$permission->permission->name}}</span>


                                                @endforeach</td>

                                                <td>
                                                    @can('role.index')
                                                        <a href="{{route('role.edit',$role->id)}}" class="" style="color: green;" data-toggle="tooltip" title="Edit"><i class="fa fa-pen"></i></a></td>
                                                    @endcan

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection
@push('js')
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
@endpush
