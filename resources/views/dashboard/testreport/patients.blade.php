@extends('dashboard.layouts.app')

@section('title')
Patient List | HMS
@endsection

@section('main')

<div class="container-fluid">
    {{-- <h5 class="mt-4">Add Test for Patients</h5>
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">Patients</li>
    </ol> --}}

    <div class="card mb-4 mt-4">
        <div class="card-header">
            <i class="fa fa-boxes mr-1"></i>
            Patient List for Test
            <a href="{{route('patient.create')}}" class="btn btn-sm btn-primary" style="float: right;"><i class="fa fa-plus-circle"></i> Add Patient</a>
            {{-- <a href="{{route('patient.create')}}" class="btn btn-sm btn-primary mr-2" style="float: right;"><i class="fa fa-plus-circle"></i> Add Test</a> --}}

            <!-- Button trigger modal -->
            <button style="float: right;" type="button" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#Modal">
                <i class="fa fa-plus-circle"></i> Add Test
            </button>

            <!-- Modal -->
            <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form enctype="multipart/form-data" action="{{route('testname.store')}}" method="post">
                            @csrf

                            <input type="hidden" name="code_name" value="{{Auth::user()->code_name}}">
                            <input type="hidden" name="entry_by" value="{{Auth::user()->name}}">

                            <div class="modal-header pt-2 pb-2">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add Test Name</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body pt-0">
                                <div class="row">
                                    <div class="col-md-12" style="max-width: 1000px; margin: auto; padding: 10px 20px;">
                                        {{-- <input type="hidden" name="id" id="id" value="{{Auth::id()}}"> --}}

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="floor_no">Floor Name:</label>
                                                    <input type="text" class="form-control form-control-sm" name="floor_no" id="floor_no" value="">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="room_no">Room No:</label>
                                                    <input type="number" class="form-control form-control-sm" name="room_no" id="room_no" value="">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="test_name">Test Name:</label>
                                                    <input type="text" class="form-control form-control-sm" name="test_name" id="test_name" value="">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="test_fees">Test Fees:</label>
                                                    <input type="number" class="form-control form-control-sm" name="test_fees" id="test_fees" value="">
                                                </div>
                                            </div>

                                        </div>
                                        {{--
                                    <div class="col-md-3 pr-0" style="float:right;">
                                        <input id="submit" type="submit" class="form-control form-control-sm btn btn-success pt-0" value="submit">
                                    </div> --}}

                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                            {{-- </form> --}}
                    </div>
                </div>
            </div>
            {{-- end modal --}}

        </div>
        <div class="card-body">
            @include('partials.alert')

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align:center;">
                            <th>SN.</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Blood</th>
                            <th>Gender</th>
                            <th>Refarence</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{dd($patients)}} --}}
                        @foreach ($patients as $key=> $patient )

                        <tr>
                            <td>{{$key+1}}</td>
                            <td> <a href="{{route('patient.show', $patient->id)}}">{{$patient->name}}</a> </td>
                            <td>{{$patient->mobile}}</td>
                            <td>{{$patient->blood}}</td>
                            <td>{{$patient->gender}}</td>
                            <td>{{$patient->refer}}</td>

                            <td style="text-align:center;">
                                @can('patient.index')
                                <a href="{{route('patient.show', $patient->id)}}" class="btn btn-sm btn-info">Test</a>
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