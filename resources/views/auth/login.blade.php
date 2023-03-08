@extends('layouts.root')

@section("head")
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
@endsection

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-updated bg-dark">
    </section><!-- /.page-title -->
    <div class="container padding-main">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            @include('errors')
                            @error('h-captcha-response')
                            <div class="alert alert-danger">
                                Captcha Required
                            </div>
                            @enderror
                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           placeholder="Type your email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Type your password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-6">
                                    <div class="h-captcha my-2"
                                         data-sitekey="bf00817b-aad5-4797-b063-6f100319a9cb"></div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button style="width: 50%;" type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if(Route::is('admin.login')===false)
                                        @if (\Illuminate\Support\Facades\Route::has('password.request'))
                                            <a style="width: 100%" class="btn text-left small btn-link"
                                               href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
