@extends('layouts.root')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-updated bg-dark"></section><!-- /.page-title -->
    <div class="container authentication padding-main">
        <form class="row justify-content-center" method="POST" action="{{ route('register') }}">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        @csrf
                        <h6 class="pt-3 mb-0 text-info">Personal Information</h6>
                        <div class="row mt-1">
                            <div class="col-sm-6 my-2">
                                <input type="text" name="fname" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="lname" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="mobile" class="form-control" placeholder="Mobile Number">
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="address" class="form-control" placeholder="Address">
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="city" class="form-control" placeholder="City">
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="state" class="form-control" placeholder="State">
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="postcode" class="form-control" placeholder="Postcode">
                            </div>
                            <div class="col-sm-6 my-2">
                                <select name="study_level" id="" class="form-control">
                                    <option value="">Current Level of Study</option>
                                </select>
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="course" class="form-control" placeholder="Course of Study">
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="matriculation" class="form-control"
                                       placeholder="Matriculation Number">
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="institute" class="form-control"
                                       placeholder="Name of Institution">
                            </div>
                            <div class="col-sm-6 my-2">
                                <select name="internship" id="" class="form-control">
                                    <option value="">Internship\SIWESS Letter</option>
                                </select>
                            </div>
                            <div class="col-sm-6 my-2">
                                <select name="program" id="" class="form-control">
                                    <option value="">Choice of Program</option>
                                    <option value="Internship">Internship</option>
                                    <option value="Traineeship">Traineeship</option>
                                    <option value="H1-B">H1-B</option>
                                </select>
                            </div>
                            <div class="col-sm-6 my-2">
                                <select name="pss_year" id="" class="form-control">
                                    <option value="">Years of Post-Secondary Study</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                        </div>
                        <h6 class="pt-5 mb-0 text-info">Account Information</h6>
                        <div class="row mt-1">
                            <div class="col-md-6 my-2">
                                <input id="username" type="text" placeholder="Username"
                                       class="form-control @error('username') is-invalid @enderror" name="username"
                                       value="{{ old('username') }}" autocomplete="username" autofocus>
                                <small>Your username can only contain letter A-Z or number 0-9</small>
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" placeholder="Email"
                                       value="{{ old('email') }}" autocomplete="email">
                                <small>We need to email you to confirm your account</small>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password" placeholder="New Password"
                                       autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input id="password-confirm" type="password" class="form-control"
                                       placeholder="Confirm Password"
                                       name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2">
                        <div class="row d-flex justify-content-center">
                            <div class="text-center">
                                <button type="submit" class="btn btn-info mr-2">
                                    {{ __('Create a new account') }}
                                </button>
                                <a href="{{ route('login') }}" class="btn btn-danger">
                                    {{ __('Cancel') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
