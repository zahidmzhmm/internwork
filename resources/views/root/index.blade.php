@extends('layouts.root')
@section('content')
    <section id="slider" class="slider">
        <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1"
             data-slide-sm="1"
             data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="3000"
             data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
            <div class="slide-item align-v-h text-center bg-overlay bg-overlay-2">
                <div class="bg-img"><img src="{{ asset('assets/images/slider/1.jpg') }}" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                            <div class="slide__content">
                                <span class="slide__subtitle">Besor Associates; we help you...</span>
                                <h2 class="slide__title">EARN...<br>and Gain Work Experience Abroad!</h2>
                                <a href="{{ url('/register') }}" class="btn btn__rounded btn__white btn__bordered">Get
                                    Started</a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-lg-10 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
            <div class="slide-item align-v-h text-center bg-overlay bg-overlay-2">
                <div class="bg-img"><img src="{{ asset('assets/images/slider/3.jpg') }}" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="slide__content">
                                <span class="slide__subtitle">Besor Associates; we help you...</span>
                                <h2 class="slide__title">LEARN...<br>through Work Place Training!</h2>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-lg-10 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
            <div class="slide-item align-v-h text-center bg-overlay bg-overlay-2">
                <div class="bg-img"><img src="{{ asset('assets/images/slider/4.jpg') }}" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="slide__content">
                                <span class="slide__subtitle">Besor Associates; we help you...</span>
                                <h2 class="slide__title">MEET...<br> New Friends, New Opportunities and New
                                    Possibilities</h2>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-lg-10 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
            <div class="slide-item align-v-h text-center bg-overlay bg-overlay-2">
                <div class="bg-img"><img src="{{ asset('assets/images/slider/5.jpg') }}" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                            <div class="slide__content">
                                <span class="slide__subtitle">Besor Associates; we help you...</span>
                                <h2 class="slide__title">NETWORK...<br>Build the Bridge Across Cultural Divides</h2>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-lg-10 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
            <div class="slide-item align-v-h text-center bg-overlay bg-overlay-2">
                <div class="bg-img"><img src="{{ asset('assets/images/slider/8.jpg') }}" alt="slide img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="slide__content">
                                <span class="slide__subtitle">Besor Associates; we help you...</span>
                                <h2 class="slide__title">Open New Windows <br> of Opportunities Globally</h2>
                                <a href="{{ url('/login') }}" class="btn btn__rounded btn__secondary">Start Now</a>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-lg-10 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
    </section><!-- /.slider -->
@endsection
