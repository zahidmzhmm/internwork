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
                        <br><br>{{ __('If you did not receive the email') }} <a href="">click here </a> to resent code
                        <form class="" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Enter Activation Code Here">
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
