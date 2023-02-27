@extends('layouts.root')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
    <style type="text/css">
        .preview {
            text-align: center;
            overflow: hidden;
            width: 160px;
            height: 160px;
            margin: 10px;
            border: 1px solid red;
        }

        .modal-lg {
            max-width: 1000px !important;
        }

        .modal-content {
            height: 80vh;
            overflow-x: auto;
        }
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
                            @csrf
                            @include("errors")
                            <div class="my-2 d-flex justify-content-center">
                                <div id="profile_img"
                                     class="border-5 image passport-image overflow-hidden">
                                    @if($profile->picture!==null)
                                        <img src="{{ asset($profile->picture) }}" alt="" class="img-fluid" style="object-fit:contain">
                                        @else
                                        <img src="{{ asset('uploads/default.jpg') }}" alt="" class="img-fluid" style="object-fit:contain">
                                    @endif
                                </div>
                            </div>
                            <div class="img-crop mb-2">
                                <input type="file" name="image" class="image form-control-file">
                            </div>
                            <input type="text" value="{{ $profile->fname }}" name="fname" class="form-control mb-2"
                                   placeholder="First Name">
                            <input type="text" value="{{ $profile->lname }}" name="lname" class="form-control mb-2"
                                   placeholder="Last Name">
                            <input type="text" value="{{ $profile->mobile }}" name="mobile" class="form-control mb-2"
                                   placeholder="Mobile">
                            <input type="text" value="{{ $user->email }}" name="email" disabled
                                   class="form-control mb-2"
                                   placeholder="Email">
                            <input type="text" value="{{ $profile->institute }}" name="institute"
                                   class="form-control mb-2" placeholder="Institution">
                            <input type="text" value="{{ $profile->address }}" name="address" class="form-control mb-2"
                                   placeholder="Address">
                            <div class="text-center mt-4">
                                <button class="btn btn-info" type="submit">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade overflow-hidden" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modalLabel">Crop Your Profile Photo</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row">
                            <div class="col-md-8">
                                <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        var $modal = $('#modal');
        var image = document.getElementById('image');
        var cropper;

        $("body").on("change", ".image", function (e) {
            var files = e.target.files;
            var done = function (url) {
                image.src = url;
                $modal.modal('show');
            };

            var reader;
            var file;
            var url;

            if (files && files.length > 0) {
                file = files[0];

                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function (e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });

        $modal.on('shown.bs.modal', function () {
            cropper = new Cropper(image, {
                aspectRatio: 1,
                viewMode: 3,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function () {
            cropper.destroy();
            cropper = null;
        });

        $("#crop").click(function () {
            canvas = cropper.getCroppedCanvas({
                width: 100,
                height: 110,
            });

            canvas.toBlob(function (blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function () {
                    var base64data = reader.result;
                    $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "/api/crop-image-upload-ajax",
                        data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data},
                        success: function (data) {
                            $modal.modal('hide');
                            if (data.success === true) {
                                var profilechanges = $("#profile_img");
                                profilechanges.empty();
                                profilechanges.append('<img src="' + data.path + '" class="img-fluid"/>');
                                profilechanges.append('<input type="hidden" name="profile_img" value="' + data.path + '"/>')
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
