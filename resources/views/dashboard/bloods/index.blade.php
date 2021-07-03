@extends('dashboard.layouts.app')

@section('title')
Blood List | HMS
@endsection

@section('main')

<div class="container-fluid">
    <h1 class="mt-4">Bloods</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">Bloods</li>

    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-boxes mr-1"></i>
            Blood List
            <a href="{{route('blood.create')}}" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-plus-circle"></i> Add Blood</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SN.</th>
                            <th>Blood Group</th>
                            <th>Stored Date</th>
                            <th>Expired Date</th>
                            <th>Id</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{dd($bloods)}} --}}
                        @foreach ($bloods as $key=> $blood )

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$blood->blood}}</td>
                            <td>{{$blood->stored_date}}</td>
                            <td>{{$blood->expired_date}}</td>
                            <td>{{$blood->id}}</td>
                            <td>
                                @can('blood.index')
                                <a href="{{route('blood.edit',$blood->id)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                @endcan
                                @can('blood.index')
                                <a href="{{route('blood.edit',$blood->id)}}" class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                @endcan
                                @can('blood.index')
                                <a href="{{route('blood.destroy',$blood->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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