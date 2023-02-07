@extends('layouts.root')

@section('content')
    <section class="page-title page-updated bg-dark">
    </section><!-- /.page-title -->
    <form action="{{ url('/admin/upload/1') }}" method="post" class="container padding-main">
        @csrf
        @include("errors")
        <input type="hidden" name="user_id" value="{{ $application->user_id }}">
        <table class="table table-striped table-hover">
            <tbody>
            <tr>
                <td>Reference</td>
                <td>{{ $application->reference }}</td>
            </tr>
            <tr>
                <td>Category</td>
                <td>{{ $application->category }}</td>
            </tr>
            <tr>
                <td>Destination</td>
                <td>{{ $application->destination }}Test</td>
            </tr>
            <tr>
                <td>Program</td>
                <td>{{ $application->program }}</td>
            </tr>
            <tr>
                <td>Amount</td>
                <td>{{ $application->fees }}</td>
            </tr>
            <tr>
                <td>Payment Status</td>
                <td>{{ $application->payment_status }}</td>
            </tr>
            @foreach($uploads as $item=>$data)
                <tr>
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
                        <a href="{{ url('/admin/ud-delete/'.$data->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td><input type="text" name="title" class="form-control" style="height: auto;line-height: 30px"
                           placeholder="Name"></td>
                <td>
                    <button class="btn btn-secondary btn-sm">Add New</button>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
@endsection
