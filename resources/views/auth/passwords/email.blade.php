@extends('layouts.root')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-updated bg-dark"></section><!-- /.page-title -->
    <div class="container padding-main">
        <div class="row justify-content-center">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-header">Password Reset</div>
                    <div class="card-body">
                        <form class="m-4" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @include("errors")
                            <div class="mb-3">
                                <input id="email" type="email" placeholder="Type your email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-0">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Send Password Reset Code') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
