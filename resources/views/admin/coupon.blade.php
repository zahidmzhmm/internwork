@extends('layouts.root')

@section('content')
    <section class="page-title page-updated bg-dark">
    </section><!-- /.page-title -->
    <div class="container padding-main">
        <div class="row">
            <div class="col-md-8 m-auto col-xl-5">
                @include("errors")
                <div class="card">
                    <div class="card-header">Coupon Setup</div>
                    <div class="card-body">
                        <form action="{{ route('admin.coupon.req') }}" method="post">
                            <div class="row">
                                @csrf
                                <div class="col-sm-6">
                                    <input type="text" name="code" class="form-control" placeholder="Entry">
                                    @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-info mt-2">Add</button>
                        </form>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-header">Coupons List</div>
                    <div class="card-body">
                        @foreach($coupons as $item=>$data)
                            <form action="{{ url('/admin/update-coupon/'.$data->id) }}" method="post" class="mb-3">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="code" class="form-control"
                                               value="{{ $data->code }}" placeholder="Code">
                                        @error('code')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-info mt-2">Update</button>
                                <a href="{{ url('/admin/delete-coupon/'.$data->id) }}" class="btn btn-danger mt-2"><i
                                        class="fa fa-trash mr-0"></i></a>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
