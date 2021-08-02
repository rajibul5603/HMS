@extends('dashboard.layouts.app')

@section('title')
Booking List | HMS
@endsection

@section('main')

<div class="container-fluid">
    <h1 class="mt-4">Bookings</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">Bookings</li>

    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-boxes mr-1"></i>
            Booking List
            <a href="{{route('room.create')}}" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-plus-circle"></i> Add Romm</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SN.</th>
                            <th>Floor Name</th>
                            <th>Room No.</th>
                            <th>Bad No.</th>
                            <th>Booking</th>
                            <th>Reliesed</th>
                            <th>Price</th>
                            <th>Room type</th>
                            <th style="text-align:center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{dd($rooms)}} --}}
                        @foreach ($rooms as $key=> $room )

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$room->floor_name}}</td>
                            <td>{{$room->room_no}}</td>
                            <td>{{$room->no_of_bad}}</td>
                            <td>{{$room->reliesed}}</td>
                            <td>{{$room->reliesed}}</td>
                            <td>{{$room->price}}</td>
                            <td>{{$room->room_type}}</td>
                            <td style="text-align:center;">
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