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
                <th>PHONE</th>
                <th>ADDRESS</th>
                <th>REG.DATE</th>
                <th>APPLY</th>
                <th>STATUS</th>
                <th style="width: 8rem">ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach($profiles as $item=>$data)
                <tr>
                    <td>{{ $item+1 }}</td>
                    <td>{{ $data->fname. ' '.$data->lname }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->mobile }}</td>
                    <td>{{ $data->address }}</td>
                    <td>{{ $data->reg }}</td>
                    <td class="text-center">
                        {!! $data->p_status===3?'<small class="text-warning">Submitted</small><br>':'' !!}
                        <a href="{{ url('/admin/profile-status/'.$data->p_id) }}"
                           class="btn btn-secondary small btn-sm pl-2 pr-0 py-1">
                            {!! $data->p_status===1?'<i class="fa fa-check"></i>':'<i class="fa fa-times"></i>' !!}
                        </a>
                    </td>
                    <td>{{ $data->email_verified_at!==null?'Verified':'Unverified' }}</td>
                    <td>
                        <a href="{{ url('/admin/user-status/'.$data->user_id) }}"
                           class="btn btn-warning small btn-sm pl-2 pr-0 py-1">
                            {!! $data->u_status!==1?'<i class="fa fa-check"></i>':'<i class="fa fa-times"></i>' !!}
                        </a>
                        <a href="{{ url('/admin/profile-download/'.$data->id) }}"
                           class="btn btn-info small btn-sm pl-2 pr-0 py-1"><i
                                class="fa fa-download"></i></a>
                        <a href="{{ url('/admin/profile-delete/'.$data->id) }}"
                           class="btn btn-danger small btn-sm pl-2 pr-0 py-1"><i
                                class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            {!! $profiles->links() !!}
        </div>
    </div>
@endsection
