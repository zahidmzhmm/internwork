@extends('layouts.root')

@section('content')
    <section class="page-title page-updated bg-dark">
    </section><!-- /.page-title -->
    <div class="container padding-main">
        @include("errors")
        <select id="ddl_status" class="my-2 form-control" style="width: 8rem">
            <option {{ request('status')==='PENDING'?'selected':'' }} value="PENDING">PENDING</option>
            <option {{ request('status')==='ADMINISTRATIVE_REVIEW'?'selected':'' }} value="ADMINISTRATIVE_REVIEW">
                Administrative Review
            </option>
            <option {{ request('status')==='IN_PROCESS'?'selected':'' }} value="IN_PROCESS"> In Process</option>
            <option {{ request('status')==='ACTIVE'?'selected':'' }} value="ACTIVE"> Active</option>
            <option {{ request('status')==='PLACEMENT_INTERVIEW'?'selected':'' }} value="PLACEMENT_INTERVIEW"> Placement
                Interview
            </option>
            <option {{ request('status')==='HIRED'?'selected':'' }} value="HIRED"> Hired</option>
            <option {{ request('status')==='INACTIVE'?'selected':'' }} value="INACTIVE"> Inactive</option>
        </select>
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
                    <td class="">
                        <select onchange="changestatus(this,{{$data->id}})" class="form-control mb-2"
                                style="width: 5rem;height: auto">
                            <option {{ $data->approve_status=='PENDING'?'selected':'' }} value="PENDING">PENDING
                            </option>
                            <option
                                {{ $data->approve_status=='ADMINISTRATIVE_REVIEW'?'selected':'' }} value="ADMINISTRATIVE_REVIEW">
                                Administrative Review
                            </option>
                            <option {{ $data->approve_status=='IN_PROCESS'?'selected':'' }} value="IN_PROCESS"> In
                                Process
                            </option>
                            <option {{ $data->approve_status=='ACTIVE'?'selected':'' }} value="ACTIVE"> Active</option>
                            <option
                                {{ $data->approve_status=='PLACEMENT_INTERVIEW'?'selected':'' }} value="PLACEMENT_INTERVIEW">
                                Placement Interview
                            </option>
                            <option {{ $data->approve_status=='HIRED'?'selected':'' }} value="HIRED"> Hired</option>
                            <option {{ $data->approve_status=='INACTIVE'?'selected':'' }} value="INACTIVE"> Inactive
                            </option>
                        </select>
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
@section('footer')
    <script>
        function changestatus(select, id) {
            let selectVal = select.options[select.selectedIndex].value;
            window.location.href = "/admin/application-status/" + selectVal + "/" + id
        }

        $("#ddl_status").on("change", function () {
            let selectedVal = $(this).children("option:selected").val();
            @if(request('cat'))
                window.location.href = "/admin/applications?cat={{ request('cat') }}&status=" + selectedVal;
            @else
                window.location.href = "/admin/applications?status=" + selectedVal;
            @endif
        })
    </script>
@endsection
