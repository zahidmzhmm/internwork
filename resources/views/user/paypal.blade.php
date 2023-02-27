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
            <form id="order-form" action="{{ route('paypal.pay') }}" method="post" class="col-md-8">
                <div class="mt-3">
                    <div id="paypal-button-container"></div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('footer')
    <script
        src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}&enable-funding=venmo&currency={{ env('PAYPAL_CURRENCY') }}"
        data-sdk-integration-source="button-factory"></script>
    <script>
        function initPayPalButton() {
            paypal.Buttons({
                style: {
                    shape: 'rect',
                    color: 'gold',
                    layout: 'vertical',
                    label: 'paypal',
                },
                createOrder: function (data, actions) {
                    return actions.order.create({
                        purchase_units: [{"amount": {"currency_code": "{{ env('PAYPAL_CURRENCY') }}", "value": {{ 50 }}}}]
                    });
                },
                onApprove: function (data, actions) {
                    return actions.order.capture().then(function (orderData) {
                        let forms = $("#order-form");
                        forms.append('<input type="hidden" name="reference" value="{{ $application->reference }}">')
                        forms.append('<input type="hidden" name="payment_method" value="paypal">')
                        forms.append('<input type="hidden" name="status" value="paid">')
                        forms.append('<input type="hidden" name="_method" value="post">')
                        forms.append('<input type="hidden" name="_token" value="{{ csrf_token() }}">')
                        setTimeout(() => {
                            forms.submit()
                        }, 2000)
                    });
                },
                onError: function (err) {
                    console.log(err)
                    //window.location.reload()
                }
            }).render('#paypal-button-container');
        }

        initPayPalButton();
    </script>
@endsection
