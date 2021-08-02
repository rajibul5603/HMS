@extends('dashboard.layouts.app')
@section('main')


<div class="container-fluid">
    <h1 class="mt-4">Patients</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">Patients</li>

    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-boxes mr-1"></i>
            Patient List
            <a href="{{route('appointment.create')}}" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-plus-circle"></i> Add Patient</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align:center;">
                            <th>SN.</th>
                            <th>Patient Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Reports</th>
                            <th style="text-align:center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{dd($appointments)}} --}}
                        @foreach ($appointments as $key=> $appointment )
                        <tr>
                            <td>{{$key+1}}</td>
                            <td> <a href="#">{{$appointment->patient->name}}</a> </td>
                            <td>{{$appointment->patient->gender}}</td>
                            <td style="text-align:center;">{{$appointment->patient->dob}}</td>
                            <td style="text-align:center;"><a href="{{route('appointment.edit',$appointment->id)}}" class="btn btn-sm btn-info">View</a></td>
                            <td style="text-align:center;">
                                @can('appointment.index')
                                <a href="{{route('appointment.edit',$appointment->id)}}" class="btn btn-sm btn-success">Prescrip</a>
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