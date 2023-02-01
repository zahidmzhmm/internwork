@extends('layouts.root')

@section('content')
    <section class="page-title page-updated bg-dark">
    </section><!-- /.page-title -->
    <div class="container padding-main">
        <div class="row">
            <form action="{{ route('admin.change.password.req') }}" method="post" class="col-md-8 m-auto col-xl-5">
                <div class="card">
                    @csrf
                    <div class="card-header">
                        Change Password
                    </div>
                    <div class="card-body">
                        @include("errors")
                        <input name="new_password" placeholder="Type Your New Password" type="text"
                               class="form-control @error('new_password') is-invalid @enderror">
                        @error('new_password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="mt-3">
                            <button class="btn btn-info">Change Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
