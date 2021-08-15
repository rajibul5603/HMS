@extends('dashboard.layouts.app')

@section('title')
Appointment List | HMS
@endsection


@section('main')


<div class="container-fluid">
    <h1 class="mt-4">Appointments</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">Appointments</li>

    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-boxes mr-1"></i>
            Appointment List
            <a href="{{route('appointment.create')}}" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-plus-circle"></i> Add Patient</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SN.</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{dd($appointments)}} --}}
                        @foreach ($appointments as $key=> $appointment )

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$appointment->patient->name}}</td>
                            <td>{{$appointment->doc->name}}</td>
                            <td>{{$appointment->date}}</td>
                            <td>{{$appointment->time}}</td>
                            <td><span class="badge badge-success">visited</span></td>
                            <td>
                                @can('appointment.index')
                                <a href="{{route('appointment.edit',$appointment->id)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                @endcan
                                @can('appointment.index')
                                <a href="{{route('appointment.edit',$appointment->id)}}" class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                @endcan
                                @can('appointment.index')
                                <a href="{{route('appointment.destroy',$appointment->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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

@push('js')
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@endpush