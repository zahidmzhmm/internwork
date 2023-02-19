@extends('layouts.root')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section id="page-title" class="page-title page-title-layout16 bg-overlay bg-overlay-2 text-center">
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/5.jpg') }}" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="pagetitle__heading">Account</h1>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @include("user.sidebar")
            </div>
            <form id="order-form" action="{{ route('payment.pay') }}" method="post" class="col-md-8">
                <div class="dashb_contents rounded">
                    @csrf
                    <input type="hidden" name="application" value="{{ $application->reference }}">
                    <h4 class="header_title">Pay Your Fees</h4>
                    <div class="dash_contents">
                        @include("errors")
                        <table class="table table-responsive-sm table-bordered table-hover">
                            <thead class="bg-gray">
                            <tr>
                                <th>Program Destination</th>
                                <th>Program Option</th>
                                <th>Program Duration</th>
                                <th>Application FEE</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $application->destination }}</td>
                                <td>{{ $application->program }}</td>
                                <td>{{ $application->duration }}</td>
                                <td>&dollar;{{ $application->fees }}</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <label for="">Select your payment method</label>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" checked name="payment_method" value="paystack"
                                       class="payment_method"
                                       id="paystack">&nbsp;&nbsp;<label
                                    for="paystack">Paystack</label> &nbsp;&nbsp;&nbsp;
                                <input type="radio" checked name="payment_method" value="paypal"
                                       class="payment_method"
                                       id="paypal">&nbsp;&nbsp;<label
                                    for="paypal">Paypal</label> &nbsp;&nbsp;&nbsp;
                                <input type="radio" name="payment_method" value="waiver" class="payment_method"
                                       id="waiver">&nbsp;&nbsp;<label
                                    for="waiver">Fee Waiver Code</label> &nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="col-md-8 col-xl-5 ml-auto">
                                <input type="text" id="waiver_code" name="code" class="form-control d-none"
                                       placeholder="Code">
                            </div>
                        </div>
                        <div class="my-2 d-flex align-items-start">
                            <input type="checkbox" class="mt-1" id="terms" required>&nbsp;&nbsp;
                            <label for="terms">
                                I have read and accept the Intern Work Abroad Programs <a href="">Terms and
                                    Conditions</a> and certify that the information I am submitting is accurate and that
                                all documents I will be uploading to support my application are genuine.
                            </label>
                        </div>
                        <div class="text-center my-2">
                            <button class="btn btn-info">Pay Amount</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('footer')
    <script>
        $(".payment_method").on("click", function () {
            let field_code = $("#waiver_code");
            if (this.value === 'waiver') {
                field_code.removeClass("d-none")
                field_code.addClass("d-block")
            } else {
                field_code.removeClass("d-block")
                field_code.addClass("d-none")
            }
        })
    </script>
@endsection
