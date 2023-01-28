@extends('layouts.root')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-updated bg-dark"></section><!-- /.page-title -->
    <div class="container padding-main">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-info text-white text-capitalize">Account activation code</div>
                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Thank you very much for completing the registration to create a profile. A confirmation email has been sent to your address. Please copy the verification code from email and paste the activation code into the space below.') }}
                        <form class="" method="POST" action="{{ route('verification.check') }}">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-sm-8">
                                    <input type="text" name="code"
                                           class="form-control  @error('code') is-invalid @enderror"
                                           placeholder="Enter Activation Code Here">
                                    @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <button type="submit"
                                            class="btn btn-info w-100 align-baseline">{{ __('Continue') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
