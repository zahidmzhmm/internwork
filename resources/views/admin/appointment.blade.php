@extends('layouts.root')
@section('head')
    <style>
        .form-control {
            height: auto;
            line-height: 0;
        }
    </style>
@endsection
@section('content')
    <section class="page-title page-updated bg-dark">
    </section><!-- /.page-title -->
    <div class="container padding-main">
        <div class="row">
            <div class="col-lg-9 col-xl-6 m-auto">
                <form action="{{ url('/admin/appointment/'.$user->id) }}" method="post" class="card">
                    @csrf
                    <div class="card-body">
                        @include("errors")
                        <div class="form-group row">
                            <label class="col-sm-6">Appointment Status:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="status" id="">
                                    <option
                                        {{ isset($appointment->status)?$appointment->status=="open"?"selected":"":"" }} value="open">
                                        Open
                                    </option>
                                    <option
                                        {{ isset($appointment->status)?$appointment->status=="closed"?"selected":"":"" }} value="closed">
                                        Close
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-6">Appointment Approval Status:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="approval"
                                        id="approval">
                                    <option
                                        {{ isset($appointment->approval)?$appointment->approval=="pending"?"selected":"":"" }} value="pending">
                                        Pending
                                    </option>
                                    <option
                                        {{ isset($appointment->approval)?$appointment->approval=="approved"?"selected":"":"" }} value="approved">
                                        Approve
                                    </option>
                                    <option
                                        {{ isset($appointment->approval)?$appointment->approval=="decline"?"selected":"":"" }} value="decline">
                                        Declined
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-6">Appointment Type:</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="type">
                                    <option
                                        {{ isset($appointment->type)?$appointment->type=="onsite"?"selected":"":"" }} value="onsite">
                                        In-person (Onsite)
                                    </option>
                                    <option
                                        {{ isset($appointment->type)?$appointment->type=="online"?"selected":"":"" }} value="online">
                                        Virtual (Online)
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-6">Appointment Date / Time:</label>
                            <div class="col-sm-6">
                                <input name="time" value="{{ isset($appointment->time)?$appointment->time:"" }}"
                                       class="form-control datetimepicker" placeholder="Choose">
                            </div>
                        </div>
                        <div class="text-center mt-2">
                            <button class="btn btn-info">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
