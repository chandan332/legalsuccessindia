@extends('layouts.root')

@section('content')
    <div class="tw-my-10">
        <img class="tw-m-auto tw-h-24" src="/images/legal_success_india_logo.png" alt="">
        @if (request()->path() === 'payment')
            <h1 class="tw-text-center tw-text-2xl">
                The total number of payments done in the last hour is: <span class="tw-text-red-600 tw-font-bold">{{ rand(5, 10) }}</span>
            </h1>
        @endif
    </div>

    <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 ">
        <div class="tw-w-[90%] tw-grid tw-grid-cols-2 tw-text-[0.775rem] md:tw-text-xl tw-mx-auto tw-my-4">
            <div class="tw-flex tw-flex-col tw-gap-2">
                <p class="tw-me-auto tw-font-bold">STATUS:</p>
                <p class="tw-me-auto tw-font-extrabold tw-text-[0.700rem] md:tw-text-xl">Pending for Payment</p>
            </div>
            <div class="tw-flex tw-flex-col tw-gap-2">
                <p class="tw-font-bold">REQUEST NUMBER:</p>
                <p class="tw-text-green-600 tw-font-bold" id="order_id">{{ request('order_id') }}</p>
                <p class="tw-ms-auto tw-text-[0.675rem] md:tw-text-sm">After making the payment we will call you for the
                    details </p>
            </div>
        </div>
        <div class="tw-w-[90%] tw-text-center tw-justify-self-center tw-text-sm md:tw-text-xl ">
            <div class="tw-bg-green-50">
                <div class="tw-grid tw-grid-cols-2 tw-border tw-border-green-400 tw-p-2 tw-font-semibold">
                    <div class="">
                        <h1>Service Price</h1>
                        <p class="tw-text-[0.775rem]">18% gst</p>
                    </div>
                    <div class="">
                        <h1>Rs {{ request('fees') }}</h1>
                        <p class="tw-text-[0.775rem]">Rs {{ round(request('fees') * 0.18) }}</p>
                    </div>
                </div>
                <div class="tw-grid tw-grid-cols-2 tw-border tw-border-green-400 tw-p-2 tw-border-t-0">
                    <h1 class="tw-font-semibold tw-text-xl">Total</h1>
                    <p class="tw-font-semibold tw-text-xl">Rs {{ request('fees') + round(request('fees') * 0.18) }}</p>
                </div>
            </div>
            <div class="tw-mt-4">
                <button type="button" id="rzp-button"
                    class="tw-w-full tw-text-white tw-bg-gradient-to-r tw-from-green-500 tw-via-green-600 tw-to-green-700 hover:tw-bg-gradient-to-br focus:tw-ring-4 focus:tw-outline-none focus:tw-ring-green-300 dark:focus:tw-ring-green-800 tw-font-medium tw-rounded-lg tw-text-sm tw-px-5 tw-py-2.5 tw-text-center tw-me-2 tw-mb-2">Pay
                    Now</button>
            </div>
            <div>
                <img src="/images/payment.webp" alt="No Image">
            </div>
        </div>
    </div>

    <div class="row g-4 tw-my-0 tw-px-2">
        <div class="col-4 tw-p-0" style="--transition-delay: 0.5s">
            <div class="card text-center h-100 border-0 ">
                <img src="/images/money.gif" class="card-img-top tw-w-[50%] md:tw-w-2/5  m-auto" alt="...">
                <div class="card-body tw-p-0">
                    <p class="tw-text-[0.575rem] md:tw-text-lg">Your Money Will be Secured with 100% Refund policy</p>
                </div>
            </div>
        </div>
        <div class="col-4 tw-p-0" style="--transition-delay: 1s">
            <div class="card text-center h-100 border-0">
                <img src="/images/privacy.gif" class="card-img-top tw-w-[50%] md:tw-w-2/5  m-auto" alt="...">
                <div class="card-body tw-p-0">
                    <p class="tw-text-[0.575rem] md:tw-text-lg">Your details will be protected with LSI Privacy policy</p>
                </div>
            </div>
        </div>
        <div class="col-4 tw-p-0" style="--transition-delay: 1.5s">
            <div class="card text-center h-100 border-0">
                <img src="/images/secure.gif" class="card-img-top tw-w-[50%] md:tw-w-2/5  m-auto" alt="...">
                <div class="card-body tw-p-0">
                    <p class="tw-text-[0.575rem] md:tw-text-lg">Secured payment Gateway PAYTM, UPI, Net Banking,
                        Debit/Credit Card</p>
                </div>
            </div>
        </div>
    </div>

    <div class="tw-bg-gray-100 tw-border-2 tw-border-gray-300 tw-px-4 tw-py-8 tw-m-4">
        <div class="">
            <div class="tw-flex tw-flex-col tw-border-b-2 tw-border-gray-300 tw-gap-2">
                <p>NAME*</p>
                <p>{{ request('name') }}</p>
            </div>
        </div>
        <div class="tw-mt-4">
            <div class="tw-flex tw-flex-col tw-border-b-2 tw-border-gray-300 tw-gap-2">
                <p>PHONE NUMBER</p>
                <p>{{ request('phone') }}</p>
            </div>
        </div>
    </div>

    <div class="tw-px-4 tw-relative tw-p-6 tw-overflow-hidden">
        <img class="tw-absolute tw-top-0 tw-left-0 tw-right-0 tw-z-[-1]" src="/images/work.jpg" alt="No Image">
        <div class="tw-flex tw-flex-col tw-gap-4 tw-text-gray-600">
            <div>
                <h1 class="">Website Address</h1>
                <p>https://legalsuccessindia.com/</p>
            </div>
            <div>
                <h1>Lets Talk</h1>
                <p>+916290634766</p>
            </div>
            <div>
                <h1>General Support</h1>
                <p>info@legalsuccessindia.com</p>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>
    <script>
        let data;
        let amount = {{ request('fees') + round(request('fees') * 0.18) }};

        axios.post('/create-order', {
            amount,
            _token: "{{ csrf_token() }}"
        }).then((res) => {
            data = res.data;
            document.getElementById('order_id').innerText = res.data.id.substring(6);
        })

        document.getElementById('rzp-button').onclick = () => {
            if (data) {
                let {
                    id,
                    currency,
                    amount
                } = data;
                var rzp = createRazorpayGetway(amount, currency, id);
                rzp.open();

                rzp.on('payment.failed', function(response) {
                    alert('Payment Failed! ' + response.error.description);
                });

                rzp.on('payment.success', function(response) {
                    alert('Payment Success! Payment ID: ' + response.razorpay_payment_id);
                });
            }
        }

        function createRazorpayGetway(amount, currency, order_id) {
            let options = {
                "key": "{{ env('RAZORPAY_KEY') }}",
                "amount": amount,
                "currency": currency,
                "name": "LegalSuccessIndia",
                "description": "Transaction Done",
                "image": "/images/legal_success_india_logo.png",
                "order_id": order_id,
                "handler": async (response) => {
                    let res = await axios('/payment-callback', {
                        _token: "{{ csrf_token() }}",
                        ...response,
                    });
                    console.log(res);
                },
                "theme": {
                    "color": "#1d4ed8"
                },
            }
            return new Razorpay(options);
        };
    </script>
@endsection
