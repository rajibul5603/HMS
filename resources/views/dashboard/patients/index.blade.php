@extends('dashboard.layouts.app')

@section('title')
Patient List | HMS
@endsection

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
            <a href="{{route('patient.create')}}" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-plus-circle"></i> Add Patient</a>
        </div>
        <div class="card-body">
            @include('partials.alert')

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SN.</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Blood</th>
                            <th>Gender</th>
                            <th>Religion</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{dd($patients)}} --}}
                        @foreach ($patients as $key=> $patient )

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$patient->name}}</td>
                            <td>{{$patient->mobile}}</td>
                            <td>{{$patient->blood}}</td>
                            <td>{{$patient->gender}}</td>
                            <td>{{$patient->religion}}</td>

                            <td>
                                @can('patient.index')
                                <a href="{{route('patient.edit',$patient->id)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                @endcan
                                @can('patient.index')
                                <a href="{{route('patient.edit',$patient->id)}}" class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                @endcan
                                @can('patient.index')
                                <a href="{{route('patient.destroy',$patient->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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