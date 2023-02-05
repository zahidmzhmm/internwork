@extends('layouts.root')
@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section id="page-title"
             class="page-title page-title-layout10 page-title-layout11 text-center bg-overlay bg-overlay-2">
        <div class="bg-img"><img src="assets/images/page-titles/14.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="pagetitle__heading">Contact Us</h1>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ==========================
          contact 1
      =========================== -->
    <section id="contact1" class="contact p-0">
        <div class="container-fluid col-padding-0">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="contact__banner align-v-h bg-overlay">
                        <div class="bg-img"><img src="{{ asset('assets/images/banners/5.jpg') }}" alt="background">
                        </div>
                        <div class="heading text-center">
                            <div class="divider__line divider__white"></div>
                            <h2 class="heading__title color-white">Do You Have Questions? <br> Please Ask</h2>
                            <div class="divider__line divider__white"></div>
                        </div><!-- /.heading -->
                    </div><!-- /.contact-banner -->
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6 bg-gray">
                    <div class="inner-padding">
                        <div class="heading">
                            <h2 class="heading__title lh-1 mb-50">Contact Us Now</h2>
                        </div><!-- /.heading -->
                        <form action="{{ route('contact.req') }}" method="post">
                            @csrf
                            @include("errors")
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group"><input name="name" type="text" class="form-control"
                                                                   placeholder="Name">
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group"><input name="email" type="email" class="form-control"
                                                                   placeholder="Email"></div>
                                </div><!-- /.col-lg-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group"><input name="phone" type="text" class="form-control"
                                                                   placeholder="Phone">
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group"><input name="subject" type="text" class="form-control"
                                                                   placeholder="Subject"></div>
                                </div><!-- /.col-lg-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mb-30"><textarea name="message" class="form-control"
                                                                            placeholder="Message"></textarea></div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn btn__rounded btn__primary btn__hover3">Send
                                        Message
                                    </button>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact 1 -->

@endsection
