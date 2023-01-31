@extends('layouts.root')

@section('content')
    <section class="page-title page-updated bg-dark">
    </section><!-- /.page-title -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @include("user.sidebar")
            </div>
            <div class="col-md-8">
                <div class="dashb_contents rounded">
                    <h4 class="header_title">Application Form</h4>
                    <div class="dash_contents">
                        <div id="appointment-root"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
