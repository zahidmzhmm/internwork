@extends('layouts.root')
@section('head')
    <style>
    </style>
@endsection
@section('content')
    <section class="page-title page-updated bg-dark">
    </section><!-- /.page-title -->
    <div class="container padding-main">
        <div class="row">
            <div class="col-sm-7 m-auto col-lg-5">
                <div class="card">
                    <div class="card-body profile">
                        <form action="{{ route('profile.u.update') }}" method="post" enctype="multipart/form-data">
                            <div class="mb-2 d-flex justify-content-center">
                                <div class="border-5 image passport-image rounded-circle overflow-hidden">

                                </div>
                            </div>
                            <div class="img-crop">
                            </div>
                            <input type="text" class="form-control mb-2" placeholder="First Name">
                            <input type="text" class="form-control mb-2" placeholder="Last Name">
                            <input type="text" class="form-control mb-2" placeholder="Mobile">
                            <input type="text" class="form-control mb-2" placeholder="Email">
                            <input type="text" class="form-control mb-2" placeholder="Institution">
                            <input type="text" class="form-control mb-2" placeholder="Address">
                            <div class="text-center mt-4">
                                <button class="btn btn-info" type="submit">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script>
    </script>
@endsection
