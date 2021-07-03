@extends('dashboard.layouts.app')

@section('title')
Romm List | HMS
@endsection

@section('main')

<div class="container-fluid">
    <h1 class="mt-4">Romms</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">Romms</li>

    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-boxes mr-1"></i>
            Romm List
            <a href="{{route('room.create')}}" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-plus-circle"></i> Add Romm</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SN.</th>
                            <th>Room No</th>
                            <th>Room type</th>
                            <th>Bad No</th>
                            <th>Price</th>
                            <th>Reliesed</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{dd($rooms)}} --}}
                        @foreach ($rooms as $key=> $room )

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$room->room_no}}</td>
                            <td>{{$room->room_type}}</td>
                            <td>{{$room->no_of_bad}}</td>
                            <td>{{$room->price}}</td>
                            <td>{{$room->reliesed}}</td>
                            <td>
                                @can('room.index')
                                <a href="{{route('room.edit',$room->id)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                @endcan
                                @can('room.index')
                                <a href="{{route('room.edit',$room->id)}}" class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                @endcan
                                @can('room.index')
                                <a href="{{route('room.destroy',$room->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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