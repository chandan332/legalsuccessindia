<div>
    <form action="">
        <div class="tw-mb-6">
            <label for="businessName"
                class="tw-block tw-mb-2 tw-text-sm tw-font-bold tw-text-gray-900 dark:tw-text-white">Business
                Name</label>
            <input type="text" wire:model="businessName" id="businessName"
                class="tw-bg-gray-50 tw-border tw-font-normal tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-3 dark:tw-bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                placeholder="Type Your Bussiness Name" />
            @error('businessName')
                <span class="tw-text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="tw-mb-6">
            <label for="businessAddress"
                class="tw-block tw-mb-2 tw-text-sm tw-font-bold tw-text-gray-900 dark:tw-text-white">Address Of
                Business</label>
            <input type="text" wire:model="businessAddress" id="businessAddress"
                class="tw-bg-gray-50 tw-border tw-font-normal tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-3 dark:tw-bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                placeholder="Bussiness Address" required />
            @error('businessAddress')
                <span class="tw-text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="tw-mb-6 ">
            <label for="businessEmployees"
                class="tw-block tw-mb-2 tw-text-sm tw-font-bold tw-text-gray-900 dark:tw-text-white">Number Of
                Employees</label>
            <input type="number" wire:model="businessEmployees" id="businessEmployees"
                class="tw-bg-gray-50 tw-border tw-font-normal tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-3 dark:tw-bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                placeholder="Number Of Employees" required />
            @error('businessEmployees')
                <span class="tw-text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="tw-mb-6">
            <label for="areaName"
                class="tw-block tw-mb-2 tw-text-sm tw-font-bold tw-text-gray-900 dark:tw-text-white">Village or City
                Name(Optional)</label>
            <input type="text" wire:model="areaName" id="areaName"
                class="tw-bg-gray-50 tw-border tw-font-normal tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-3 dark:tw-bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                placeholder="Village or City Name" />
            @error('areaName')
                <span class="tw-text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="tw-mb-6">
            <label for="railwayName"
                class="tw-block tw-mb-2 tw-text-sm tw-font-bold tw-text-gray-900 dark:tw-text-white">Nearest Railway
                Station Name(Optional)</label>
            <input type="text" wire:model="railwayName" id="railwayName"
                class="tw-bg-gray-50 tw-border tw-font-normal tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-3 dark:tw-bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                placeholder="Railway Name" />
            @error('railwayName')
                <span class="tw-text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="tw-mb-6">
            <label for="pinCode"
                class="tw-block tw-mb-2 tw-text-sm tw-font-bold tw-text-gray-900 dark:tw-text-white">Pin Code</label>
            <input type="number" wire:model="pinCode" id="pinCode"
                class="tw-bg-gray-50 tw-border tw-font-normal tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-3 dark:tw-bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                placeholder="Pin Code" required />
            @error('pinCode')
                <span class="tw-text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="tw-mb-6">
            <label for="LandMarkName"
                class="tw-block tw-mb-2 tw-text-sm tw-font-bold tw-text-gray-900 dark:tw-text-white">LandMark
                Name(Optional)</label>
            <input type="text" wire:model="LandMarkName" id="LandMarkName"
                class="tw-bg-gray-50 tw-border tw-font-normal tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-3 dark:tw-bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                placeholder="LandMark" />
            @error('LandMarkName')
                <span class="tw-text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="tw-mb-6">
            <label for="platform"
                class="tw-block tw-mb-2 tw-text-sm tw-font-bold tw-text-gray-900 dark:tw-text-white">How did you hear
                about us?</label>
            <select id="platform" wire:model="platform"
                class="tw-bg-gray-50 tw-border tw-font-normal tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-3 dark:tw-bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500">
                <option selected>-Select One-</option>
                <option value="google">Google</option>
                <option value="youtube">Youtube</option>
                <option value="facebook">Facebook</option>
                <option value="instagram">Instagram</option>
                <option value="others">Others</option>
            </select>
            @error('platform')
                <span class="tw-text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="tw-p-5 tw-my-4 tw-border tw-border-green-800">
            <div class="tw-flex tw-items-center tw-mb-6">
                <input id="fees1" type="radio" value="1179" name="fees" wire:model='fees'
                    class="tw-w-4 tw-h-4 tw-text-blue-600 tw-bg-gray-100 tw-border-gray-300   dark:tw-bg-gray-700 dark:tw-border-gray-600">
                <label for="fees1"
                    class="tw-ms-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-gray-300">Basic (1 Year) -
                    Annual
                    turnover less then 12
                    Lakh. cost - 999 + 18%gst (Including Govt Fee) = <span class="tw-font-semibold">1179rs</span></label>
            </div>

            <div class="tw-flex tw-items-center tw-mb-6">
                <input id="fees2" type="radio" value="2359" name="fees" wire:model='fees'
                    class="tw-w-4 tw-h-4 tw-text-blue-600 tw-bg-gray-100 tw-border-gray-300   dark:tw-bg-gray-700 dark:tw-border-gray-600">
                <label for="fees2"
                    class="tw-ms-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-gray-300">Basic (5 Year) -
                    Annual
                    turnover less then 12
                    Lakh. cost - 1999 + 18%gst (Including Govt Fee) = <span class="tw-font-semibold">2359rs</span></label>
            </div>

            <div class="tw-flex tw-items-center tw-mb-6">
                <input id="fees3" type="radio" value="2359" name="fees" wire:model='fees'
                    class="tw-w-4 tw-h-4 tw-text-blue-600 tw-bg-gray-100 tw-border-gray-300   dark:tw-bg-gray-700 dark:tw-border-gray-600">
                <label for="fees3"
                    class="tw-ms-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-gray-300">State - Annual
                    turnover
                    between 12 lakhs to 20 crores cost -1999+18%gst (Excluding Govt Fee) = <span class="tw-font-semibold">2359rs</span></label>
            </div>

            <div class="tw-flex tw-items-center tw-mb-6">
                <input id="fees4" type="radio" value="3540" name="fees" wire:model='fees'
                    class="tw-w-4 tw-h-4 tw-text-blue-600 tw-bg-gray-100 tw-border-gray-300   dark:tw-bg-gray-700 dark:tw-border-gray-600">
                <label for="fees4"
                    class="tw-ms-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-gray-300">Central - Annual
                    turnover of the business above 20 crores cost 2999+18%gst (Excluding Govt Fee) = <span class="tw-font-semibold">3540rs</span></label>
            </div>
            @error('fees')
                <span class="tw-text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="tw-flex tw-justify-center">
            <button type="submit" wire:click.prevent="submit"
                class="tw-text-white tw-bg-blue-700 hover:tw-bg-blue-800 tw-font-medium tw-rounded-lg tw-text-sm tw-w-full sm:tw-w-auto tw-px-5 tw-py-2.5 tw-text-center dark:tw-bg-blue-600 dark:hover:tw-bg-blue-700 ">Proceed
                Now
            </button>
        </div>

    </form>
</div>


@assets
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>
@endassets

@script
    <script>
        // listening event emitted form livewire component
        $wire.on('process-payment', async (fees) => {
            function createRazorpayGetway(amount, currency, order_id) {
                let options = {
                    "key": "{{ env('RAZORPAY_KEY') }}",
                    "amount": amount,
                    "currency": currency,
                    "name": "LegalSuccessIndia",
                    "description": "Transaction Done",
                    "image": "/images/legal_success_india_logo.png",
                    "order_id": order_id, // Pass the order ID created from the server
                    "handler": async (response) => {
                        let res = await axios('/payment-callback', {
                            _token: "{{ csrf_token() }}",
                            ...response,
                        });
                        console.log(res);
                    },
                    "theme": {
                        "color": "#111"
                    },
                }
                return new Razorpay(options);
            };

            let {
                data
            } = await axios.post('/create-order', {
                amount: +fees,
                _token: "{{ csrf_token() }}"
            });
            console.log(data);

            var rzp = createRazorpayGetway(data.amount, data.currency, data.id);

            rzp.open();

            rzp.on('payment.failed', function(response) {
                alert('Payment Failed! ' + response.error.description);
            });

            rzp.on('payment.success', function(response) {
                alert('Payment Success! Payment ID: ' + response.razorpay_payment_id);
            });
        });
    </script>
@endscript
