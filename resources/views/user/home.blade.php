@extends('layouts.root')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section id="page-title" class="page-title page-title-layout16 bg-overlay bg-overlay-2 text-center">
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/5.jpg') }}" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="pagetitle__heading">Account</h1>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @include("user.sidebar")
            </div>
            <div class="col-md-8">
                <div class="dashb_contents rounded">
                    <h4 class="header_title">Profile Details</h4>
                    <div class="dash_contents">
                        <table class="table table-bordered table-hover text-muted table-responsive-sm">
                            <tbody>
                            <tr>
                                <td>Name:</td>
                                <td>{{ $glob_profile->fname.' '.$glob_profile->lname }}</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>{{ $glob_user->email }}</td>
                            </tr>
                            <tr>
                                <td>Mobile:</td>
                                <td>{{ $glob_profile->mobile }}</td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td>{{ $glob_profile->address }}</td>
                            </tr>
                            <tr>
                                <td>City:</td>
                                <td>{{ $glob_profile->city }}</td>
                            </tr>
                            <tr>
                                <td>State:</td>
                                <td>{{ $glob_profile->state }}</td>
                            </tr>
                            <tr>
                                <td>Post Code:</td>
                                <td>{{ $glob_profile->postcode }}</td>
                            </tr>
                            <tr>
                                <td>Current Level of Study:</td>
                                <td>{{ $glob_profile->study_level }}</td>
                            </tr>
                            <tr>
                                <td>Course of Study</td>
                                <td>{{ $glob_profile->course }}</td>
                            </tr>
                            <tr>
                                <td>Matriculation Number</td>
                                <td>{{ $glob_profile->matriculation }}</td>
                            </tr>
                            <tr>
                                <td>Name of Institute</td>
                                <td>{{ $glob_profile->institute }}</td>
                            </tr>
                            <tr>
                                <td>Internship/SIWES Letter</td>
                                <td>{{ $glob_profile->internship===1?"Yes":"No" }}</td>
                            </tr>
                            <tr>
                                <td>Choice of Program</td>
                                <td>{{ $glob_profile->program }}</td>
                            </tr>
                            <tr>
                                <td>Years of Post-Secondary Study</td>
                                <td>{{ $glob_profile->pss_year }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
