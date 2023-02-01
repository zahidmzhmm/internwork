@extends('layouts.root')

@section('content')
    <section class="page-title page-updated bg-dark">
    </section><!-- /.page-title -->
    <div class="container padding-main">
        @include("errors")
        <table class="table table-hover table-bordered table-responsive-sm table-bordered">
            <thead>
            <tr class="bg-gray">
                <th>SN</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>DESTINATION</th>
                <th>PROGRAM</th>
                <th>DURATION</th>
                <th>Payment Method</th>
                <th>Payment Status</th>
                <th>STATUS</th>
                <th style="width: 8rem">ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach($applications as $item=>$data)
                <tr>
                    <td>{{ $item+1 }}</td>
                    <td>{{ $data->fname.' '.$data->lname }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->destination }}</td>
                    <td>{{ $data->program }}</td>
                    <td>{{ $data->duration }}</td>
                    <td>{{ $data->payment_method }}</td>
                    <td>{{ $data->payment_status }}</td>
                    <td>{{ $data->approve_status }}</td>
                    <td>
                        <a href="{{ url('/admin/application-status/'.$data->id) }}"
                           class="btn btn-warning small btn-sm pl-2 pr-0 py-1">
                            {!! $data->approve_status==="approved"?'<i class="fa fa-times"></i>':'<i class="fa fa-check"></i>' !!}
                        </a>
                        <a href="{{ url('/admin/application-download/'.$data->id) }}"
                           class="btn btn-info small btn-sm pl-2 pr-0 py-1"><i
                                class="fa fa-download"></i></a>
                        <a href="{{ url('/admin/application-delete/'.$data->id) }}"
                           class="btn btn-danger small btn-sm pl-2 pr-0 py-1"><i
                                class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            {!! $applications->links() !!}
        </div>
    </div>
@endsection
