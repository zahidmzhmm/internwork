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
                    <h4 class="header_title">Uploads</h4>
                    <div class="dash_contents">
                        @include("errors")
                        @if($glob_profile->status==2 || $glob_profile->status==3)
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($uploads as $item=>$data)
                                    <tr>
                                        <td>{{ $item+1 }}</td>
                                        <td>
                                            @if($data->uploaded==2 && \Illuminate\Support\Facades\File::exists(public_path($data->path)))
                                                <a target="_blank" href="{{ url($data->path) }}">{{ $data->title }}</a>
                                            @else
                                                {{ $data->title }}
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ url('/user/upload/'.$data->id) }}" method="post"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" name="file">
                                                <input type="hidden" name="from_user"
                                                       value="{{ \Illuminate\Support\Facades\Auth::id() }}">
                                                @error('file')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                                <button type="submit" class="btn btn-sm btn-info">Upload</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            {!! $glob_profile->status==3?"<p>Your application already submitted</p>":"<p>You Have Not Applied For Intern Work Programs.</p>" !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include("modal.application")
@endsection
