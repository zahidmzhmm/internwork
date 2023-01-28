@extends('layouts.root')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-updated bg-dark"></section><!-- /.page-title -->
    <div class="container padding-main">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
                <form class="d-flex" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <div class="w-100">
                        <button type="submit"
                                class="btn w-100 text-left btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
