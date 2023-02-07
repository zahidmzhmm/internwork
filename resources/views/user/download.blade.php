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
                    <h4 class="header_title">Downloads</h4>
                    <div class="dash_contents">
                        @include("errors")
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($downloads as $item=>$data)
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
                                        @if($data->uploaded==2 && \Illuminate\Support\Facades\File::exists(public_path($data->path)))
                                            <a class="btn btn-info btn-sm" target="_blank" href="{{ url($data->path) }}">Download</a>
                                        @else
                                            <a href="#" class="btn btn-info btn-sm disabled" disabled>Download</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include("modal.application")
@endsection
