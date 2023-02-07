@extends('layouts.root')
@section('head')
    <style>
        .form-control {
            height: auto;
            line-height: 0;
        }
    </style>
@endsection
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
                    <h4 class="header_title">Appointment</h4>
                    <div class="dash_contents">
                        @include("errors")
                        @if($appointment)
                            @if($appointment->time!=null)
                                <div style="font-size: 1rem;padding-top: 15px;padding-bottom: 15px;">
                                    <div><b>Appointment Approval Status:</b> {{ $appointment->approval }}</div>
                                    <br>
                                    <div><b>Appointment Date / Time:</b> {{ $appointment->time }}</div>
                                    <br>
                                    <div><b>Appointment
                                            Type:</b> {{ $appointment->type=='onsite'?'In-person (Onsite)':'Virtual (Online)' }}
                                    </div>
                                    <br>
                                </div>
                            @else
                                <form action="{{ route('user.appointment.request') }}" method="post" class="">
                                    <div class="form-group row">
                                        @csrf
                                        <label class="col-md-6 text-left">Type</label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="type" id="appointment_type">
                                                <option value="">Select Type</option>
                                                <option value="onsite">In-person (Onsite)</option>
                                                <option value="online">Virtual (Online)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-6 text-left">Select Appointment Date</label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="time" id="appointment_time">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button class="btn-info btn">Request</button>
                                    </div>
                                </form>
                            @endif
                        @else
                            <p>You don't have any appointment</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include("modal.application")
    <script>
        $(document).on('change', '#appointment_type', function (e) {
            var appointment_type = $("#appointment_type").val();
            $.ajax({
                type: "get",
                url: '/api/appointment-list?type=' + appointment_type,
                dataType: "json",
                success: function (result) {
                    $("#appointment_time").html(result.listOptions);
                },
            });
        });
    </script>
@endsection
