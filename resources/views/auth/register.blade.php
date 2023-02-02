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
                                <input type="text" name="fname" value="{{ old('fname') }}"
                                       class="form-control @error('fname') is-invalid @enderror"
                                       placeholder="First Name">
                                @error('fname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="lname" value="{{ old('lname') }}"
                                       class="form-control @error('lname') is-invalid @enderror"
                                       placeholder="Last Name">
                                @error('lname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="mobile" value="{{ old('mobile') }}"
                                       class="form-control @error('mobile') is-invalid @enderror"
                                       placeholder="Mobile Number">
                                @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="address" value="{{ old('address') }}"
                                       class="form-control @error('address') is-invalid @enderror"
                                       placeholder="Address">
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="city" class="form-control @error('city') is-invalid @enderror"
                                       placeholder="City" value="{{ old('city') }}">
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="state" value="{{ old('state') }}"
                                       class="form-control @error('state') is-invalid @enderror" placeholder="State">
                                @error('state')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="postcode" value="{{ old('postcode') }}"
                                       class="form-control @error('postcode') is-invalid @enderror"
                                       placeholder="Postcode">
                                @error('postcode')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 my-2">
                                <select name="study_level" id=""
                                        class="form-control @error('study_level') is-invalid @enderror">
                                    <option value="">Current Level of Study</option>
                                    <option value="1st Year">1st Year</option>
                                    <option value="2nd Year">2nd Year</option>
                                    <option value="3rd Year">3rd Year</option>
                                    <option value="4th Year">4th Year</option>
                                    <option value="Final Year">Final Year</option>
                                    <option value="National Service">National Service</option>
                                    <option value="Graduate">Graduate</option>
                                </select>
                                @error('study_level')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="course" value="{{ old('course') }}"
                                       class="form-control @error('course') is-invalid @enderror"
                                       placeholder="Course of Study">
                                @error('course')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="matriculation" value="{{ old('matriculation') }}"
                                       class="form-control @error('matriculation') is-invalid @enderror"
                                       placeholder="Matriculation Number">
                                @error('matriculation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 my-2">
                                <input type="text" name="institute" value="{{ old('institute') }}"
                                       class="form-control @error('institute') is-invalid @enderror"
                                       placeholder="Name of Institution">
                                @error('institute')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 my-2">
                                <select name="internship" id=""
                                        class="form-control @error('internship') is-invalid @enderror">
                                    <option value="">Internship\SIWES Letter</option>
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                                @error('internship')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 my-2">
                                <select name="program" id=""
                                        class="form-control @error('program') is-invalid @enderror">
                                    <option value="">Choice of Program</option>
                                    <option value="Internship">Internship</option>
                                    <option value="Traineeship">Traineeship</option>
                                    <option value="H1-B">H1-B</option>
                                </select>
                                @error('program')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6 my-2">
                                <select name="pss_year" id=""
                                        class="form-control @error('pss_year') is-invalid @enderror">
                                    <option value="">Years of Post-Secondary Study</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                                @error('pss_year')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
