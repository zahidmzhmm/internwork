@extends('layouts.root')

@section('content')
    <section class="page-title page-updated bg-dark">
    </section><!-- /.page-title -->
    <div class="container padding-main">
        <div class="row">
            <div class="col-md-8 m-auto col-xl-5">
                @include("errors")
                <div class="card">
                    <div class="card-header">Duration Setup</div>
                    <div class="card-body">
                        <form action="{{ route('admin.duration') }}" method="post">
                            <div class="row">
                                @csrf
                                <div class="col-sm-6">
                                    <input type="text" name="applicable_entry" class="form-control" placeholder="Entry">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="start_date" class="form-control" placeholder="Start Date">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="end_date" class="form-control" placeholder="End Date">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="deadline" class="form-control" placeholder="Deadline">
                                </div>
                            </div>
                            <button class="btn btn-info mt-2">Add</button>
                        </form>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-header">Duration List</div>
                    <div class="card-body">
                        @foreach($duration as $item=>$data)
                            <form action="{{ url('/admin/update-duration/'.$data->id) }}" method="post" class="mb-3">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="applicable_entry" class="form-control"
                                               value="{{ $data->applicable_entry }}" placeholder="Entry">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="start_date" class="form-control"
                                               value="{{ $data->start_date }}" placeholder="Start Date">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="end_date" class="form-control"
                                               value="{{ $data->end_date }}" placeholder="End Date">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="deadline" class="form-control"
                                               value="{{ $data->deadline }}" placeholder="Deadline">
                                    </div>
                                </div>
                                <button class="btn btn-info mt-2">Update</button>
                                <a href="{{ url('/admin/delete-duration/'.$data->id) }}" class="btn btn-danger mt-2"><i
                                        class="fa fa-trash mr-0"></i></a>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
