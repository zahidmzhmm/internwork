@extends('layouts.root')

@section('content')
    <section class="page-title page-updated bg-dark">
    </section><!-- /.page-title -->
    <div class="container padding-main">
        <div class="row">
            <div class="col-md-8 m-auto col-xl-5">
                @include("errors")
                <div class="card">
                    <div class="card-header">Appointment Setup</div>
                    <div class="card-body">
                        <form action="{{ route('admin.appointment.list.store') }}" method="post">
                            <div class="row">
                                @csrf
                                <div class="col-sm-6">
                                    <input type="text" name="time" class="form-control datetimepicker"
                                           placeholder="Appointment Date Time">
                                </div>
                                <div class="col-sm-6">
                                    <select name="type" id="" class="form-control">
                                        <option value="onsite">Onsite</option>
                                        <option value="online">Online</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-info mt-2">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-header">Appointment List</div>
                    <div class="card-body">
                        @foreach($appointments as $item=>$data)
                            <form action="{{ url('/admin/update-appointment-list/'.$data->id) }}" method="post"
                                  class="mb-3">
                                @csrf
                                <div class="row">
                                    @csrf
                                    <div class="col-sm-6">
                                        <input type="text" name="time" value="{{ $data->time }}"
                                               class="form-control datetimepicker"
                                               placeholder="Appointment Date Time">
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="type" id="" class="form-control">
                                            <option {{ $data->type=="onsite"?'selected':'' }} value="onsite">Onsite
                                            </option>
                                            <option {{ $data->type=="online"?'selected':'' }} value="online">Online
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-info mt-2">Update</button>
                                <a href="{{ url('/admin/delete-appointment-list/'.$data->id) }}"
                                   class="btn btn-danger mt-2"><i
                                        class="fa fa-trash mr-0"></i></a>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
