@extends('dashboard.layouts.app')

@section('title')
Patient List | HMS
@endsection

@section('main')

<div class="container-fluid">
    <h1 class="mt-4">Appointment</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">Appointment</li>

    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-boxes mr-1"></i>
            Patient List
        </div>
        <div class="card-body">
            @include('partials.alert')

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width:26px;">SN.</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Blood</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Religion</th>
                            <th style="width:50px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{dd($patients)}} --}}
                        @foreach ($patients as $key=> $patient )

                        <tr>
                            <td style="text-align:center">{{$key+1}}</td>
                            <td>{{$patient->name}}</td>
                            <td>{{$patient->mobile}}</td>
                            <td>{{$patient->blood}}</td>
                            <td>{{$patient->gender}}</td>
                            <td>{{$patient->dob}}</td>
                            <td>{{$patient->religion}}</td>
                            <td style="text-align:center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Modal_{{$key}}">
                                    <i class="fa fa-handshake"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="Modal_{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <form enctype="multipart/form-data" @if (Route::currentRouteName()=='appointment.edit') action="{{route('appointment.update', $patients[$key]->id)}}" method="post"
                                    @else action="{{route('appointment.store')}}" method="post"
                                    @endif >

                                    @csrf

                                    <input type="hidden" name="code_name" value="{{Auth::user()->code_name}}">
                                    <input type="hidden" name="entry_by" value="{{Auth::user()->name}}">
                                    <input type="hidden" name="patient_id" value="{{$patients[$key]->id}}">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Appointment</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12" style="max-width: 1000px; margin: auto; padding: 10px 20px;">
                                                {{-- <input type="hidden" name="id" id="id" value="{{Auth::id()}}"> --}}

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h5> <span style="color: red;">{{$patients[$key]->name}}</span> | {{$patients[$key]->mobile}}</h5>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6">
                                                        <x-form.input.date id="date" label="Appointment Date" class="form-control form-control-sm" placeholder="dd/mm/yyyy"
                                                          value="{{(isset($appointment->date) && $appointment->date!='')?$appointment->date :''}}" />
                                                    </div>

                                                    <div class="col-md-6">
                                                        <x-form.input.time id="time" label="Appointment Time" class="form-control form-control-sm" placeholder="dd/mm/yyyy"
                                                          value="{{(isset($appointment->date) && $appointment->date!='')?$appointment->date :''}}" />
                                                    </div>


                                                    <div class="col-md-12">
                                                        <x-form.input.select id="specialist" label="Specialist" otherattr="required" class="form-control form-control-sm">
                                                            <option value="{{(isset($appointment->user->name) && $appointment->user->name!='')?$appointment->user->name :''}}">
                                                                {{(isset($appointment->user->name) && $appointment->user->name!='')?$appointment->user->name :'-- Select --'}}
                                                            </option>
                                                            @foreach ($specialists as $specialist)
                                                            <option value="{{$specialist->name}}">{{$specialist->name}}</option>
                                                            @endforeach
                                                        </x-form.input.select>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <x-form.input.select id="user_id" label="Doctor" otherattr="required" class="form-control form-control-sm">
                                                            <option value="{{(isset($appointment->user->name) && $appointment->user->name!='')?$appointment->user->name :''}}">
                                                                {{(isset($appointment->user->name) && $appointment->user->name!='')?$appointment->user->name :'-- Select --'}}
                                                            </option>
                                                            @foreach ($doctors as $doctor)
                                                            <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                                            @endforeach
                                                        </x-form.input.select>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <x-form.input.number id="fees" label="Fees" class="form-control form-control-sm" placeholder="Fees " value="{{(isset($appointment->time) && $appointment->time!='')?$appointment->time :''}}" />
                                                    </div>

                                                    <div class="col-md-6">
                                                        <x-form.input.select id="meet" label="No of Appointment" otherattr="required" class="form-control form-control-sm">
                                                            <option value="{{(isset($appointment->user->name) && $appointment->user->name!='')?$appointment->user->name :''}}">
                                                                {{(isset($appointment->user->name) && $appointment->user->name!='')?$appointment->user->name :'-- Select --'}}
                                                            </option>
                                                            <option value="1st Appointment">1st Appointment</option>
                                                            <option value="2nd Appointment">2nd Appointment</option>
                                                            <option value="3th Appointment">3th Appointment</option>
                                                            <option value="4th Appointment">4th Appointment</option>
                                                            <option value="5th Appointment">5th Appointment</option>
                                                            <option value="6th Appointment">6th Appointment</option>
                                                            <option value="7th Appointment">7th Appointment</option>
                                                            <option value="8th Appointment">8th Appointment</option>
                                                            <option value="9th Appointment">9th Appointment</option>
                                                            <option value="10th Appointment">10th Appointment</option>
                                                            <option value="More Appointment">More Appointment</option>
                                                        </x-form.input.select>
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
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- end modal --}}
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