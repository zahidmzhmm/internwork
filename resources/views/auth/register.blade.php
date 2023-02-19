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
                        <h6 class="pt-5 mb-0 text-info">Additional information</h6>
                        <div class="row mt-1">
                            <div class="col-md-6 my-2">
                                <select name="social_link" class="form-control social_option" id="">
                                    <option value="">Social Media Handle</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Twitter">Twitter</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Snapchat">Snapchat</option>
                                </select>
                                @error('social_link')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2 d-none social_val">
                                <input type="text"
                                       class="form-control @error('social_val') is-invalid @enderror"
                                       name="social_val" placeholder="Social Value"
                                       value="{{ old('social_val') }}">
                                @error('social_val')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input type="text"
                                       class="form-control @error('linkedIn') is-invalid @enderror"
                                       name="linkedIn" placeholder="LinkedIn"/>
                                @error('linkedIn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input type="text"
                                       class="form-control @error('nid') is-invalid @enderror"
                                       name="nid" placeholder="NID"/>
                                @error('nid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input type="text"
                                       class="form-control @error('w_number') is-invalid @enderror"
                                       name="w_number" placeholder="WhatsApp Number"/>
                                @error('w_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <h6 class="pt-5 mb-0 text-info">Parental Information</h6>
                        <div class="row mt-1">
                            {{--Father Infos--}}
                            <div class="col-md-6 my-2">
                                <input type="text"
                                       class="form-control @error('father_name') is-invalid @enderror"
                                       name="father_name" placeholder="Full names of Father"
                                       value="{{ old('father_name') }}">
                                @error('father_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input type="text"
                                       class="form-control @error('father_home_address') is-invalid @enderror"
                                       name="father_home_address" placeholder="Home Address of Father"
                                       value="{{ old('father_home_address') }}">
                                @error('father_home_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input type="text"
                                       class="form-control @error('father_work_address') is-invalid @enderror"
                                       name="father_work_address" placeholder="Work Address of Father"
                                       value="{{ old('father_work_address') }}">
                                @error('father_work_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input type="text"
                                       class="form-control @error('father_email') is-invalid @enderror"
                                       name="father_email" placeholder="Email Address"
                                       value="{{ old('father_email') }}">
                                @error('father_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input type="text"
                                       class="form-control @error('father_phone') is-invalid @enderror"
                                       name="father_phone" placeholder="Phone Number"
                                       value="{{ old('father_phone') }}">
                                @error('father_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input type="text"
                                       class="form-control @error('father_nid') is-invalid @enderror"
                                       name="father_nid" placeholder="NID"
                                       value="{{ old('father_nid') }}">
                                @error('father_nid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            {{--Mother Infos--}}
                            <div class="col-md-6 my-2">
                                <input type="text"
                                       class="form-control @error('mother_name') is-invalid @enderror"
                                       name="mother_name" placeholder="Full names of Mother"
                                       value="{{ old('mother_name') }}">
                                @error('mother_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input type="text"
                                       class="form-control @error('mother_home_address') is-invalid @enderror"
                                       name="mother_home_address" placeholder="Home Address of Mother"
                                       value="{{ old('mother_home_address') }}">
                                @error('mother_home_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input type="text"
                                       class="form-control @error('mother_work_address') is-invalid @enderror"
                                       name="mother_work_address" placeholder="Work Address of Mother"
                                       value="{{ old('mother_work_address') }}">
                                @error('mother_work_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input type="text"
                                       class="form-control @error('mother_email') is-invalid @enderror"
                                       name="mother_email" placeholder="Email Address"
                                       value="{{ old('mother_email') }}">
                                @error('mother_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input type="text"
                                       class="form-control @error('mother_phone') is-invalid @enderror"
                                       name="mother_phone" placeholder="Phone Number"
                                       value="{{ old('mother_phone') }}">
                                @error('mother_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 my-2">
                                <input type="text"
                                       class="form-control @error('mother_nid') is-invalid @enderror"
                                       name="mother_nid" placeholder="NID"
                                       value="{{ old('mother_nid') }}">
                                @error('mother_nid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-12 my-2">
                                <label for="sponsor">Are your parents your Financial sponsor for participation in the
                                    program?</label>&nbsp;&nbsp;&nbsp;
                                <input name="sponsor" class="sponsor_yn" id="sponsor_y" type="radio"
                                       value="Yes">&nbsp;<label
                                    for="sponsor_y">Yes</label>
                                <input name="sponsor" class="sponsor_yn" id="sponsor_n" checked value="No"
                                       type="radio">&nbsp;<label
                                    for="sponsor_n">No</label>
                            </div>
                            {{--Sponsor Infos--}}
                            <div class="col-md-12 sponsor_infos d-none">
                                <div class="row">
                                    <div class="col-md-6 my-2">
                                        <input type="text"
                                               class="form-control @error('sponsor_name') is-invalid @enderror"
                                               name="sponsor_name" placeholder="Full names of Sponsor"
                                               value="{{ old('sponsor_name') }}">
                                        @error('sponsor_name')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <input type="text"
                                               class="form-control @error('sponsor_address') is-invalid @enderror"
                                               name="sponsor_address" placeholder="Contact Address"
                                               value="{{ old('sponsor_address') }}">
                                        @error('sponsor_address')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <input type="text"
                                               class="form-control @error('sponsor_email') is-invalid @enderror"
                                               name="sponsor_email" placeholder="Email Address"
                                               value="{{ old('sponsor_email') }}">
                                        @error('sponsor_email')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <input type="text"
                                               class="form-control @error('sponsor_phone') is-invalid @enderror"
                                               name="sponsor_phone" placeholder="Phone Number"
                                               value="{{ old('sponsor_phone') }}">
                                        @error('sponsor_phone')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <input type="text"
                                               class="form-control @error('sponsor_relation') is-invalid @enderror"
                                               name="sponsor_relation" placeholder="Relationship to you"
                                               value="{{ old('sponsor_relation') }}">
                                        @error('sponsor_relation')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <input type="text"
                                               class="form-control @error('sponsor_nid') is-invalid @enderror"
                                               name="sponsor_nid" placeholder="NID"
                                               value="{{ old('sponsor_nid') }}">
                                        @error('sponsor_nid')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <input type="text"
                                               class="form-control @error('sponsor_year') is-invalid @enderror"
                                               name="sponsor_year"
                                               placeholder="How many dependents does your sponsor have"
                                               value="{{ old('sponsor_year') }}">
                                        @error('sponsor_year')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 my-2">
                                        <input type="text"
                                               class="form-control @error('sponsor_occupation') is-invalid @enderror"
                                               name="sponsor_occupation" placeholder="Sponsor’s occupation"
                                               value="{{ old('sponsor_occupation') }}">
                                        @error('sponsor_occupation')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                </div>
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
@section('footer')
    <script>
        $(".sponsor_yn").on("change", function () {
            let val = $(".sponsor_yn:checked").val();
            let sponsorInfo = $(".sponsor_infos");
            if (val == "Yes") {
                sponsorInfo.addClass("d-block")
                sponsorInfo.removeClass("d-none")
            } else {
                sponsorInfo.removeClass("d-block")
                sponsorInfo.addClass("d-none")
            }
        })
        $(".social_option").on("change", function () {
            let val = $(this).val();
            let social_val = $(".social_val");
            if (val) {
                social_val.addClass("d-block")
                social_val.removeClass("d-none")
                social_val.find("input").attr('placeholder', 'Enter you ' + val + ' link');
            } else {
                social_val.removeClass("d-block")
                social_val.addClass("d-none")
            }
        })
    </script>
@endsection
