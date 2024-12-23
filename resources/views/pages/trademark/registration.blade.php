@extends('layouts.root')

@php
    $cards = [
        [
            'title' => 'Reach out to our Experts',
            'body' => 'We have the best business experts who can resolve all your queries',
            'image' => '/images/tech-support.gif',
        ],
        [
            'title' => 'Provide all the required documents',
            'body' => 'Provide all the documents. Our team will initiate the paperwork on your behalf',
            'image' => '/images/document.gif',
        ],
        [
            'title' => 'Get your Trademark Registration done',
            'body' => 'Registration is completed and the certificates will be sent to you.',
            'image' => '/images/user.webp',
        ],
    ];
    $states = [
        'Andhra Pradesh',
        'Arunachal Pradesh',
        'Assam',
        'Bihar',
        'Chhattisgarh',
        'Goa',
        'Gujarat',
        'Haryana',
        'Himachal Pradesh',
        'Jharkhand',
        'Karnataka',
        'Kerala',
        'Madhya Pradesh',
        'Maharashtra',
        'Manipur',
        'Meghalaya',
        'Mizoram',
        'Nagaland',
        'Odisha',
        'Punjab',
        'Rajasthan',
        'Sikkim',
        'Tamil Nadu',
        'Telangana',
        'Tripura',
        'Uttar Pradesh',
        'Uttarakhand',
        'West Bengal',
        'Others',
    ];
@endphp

@section('content')
    <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2">
        <div>
            <h1 class="tw-mb-4 tw-text-3xl tw-font-extrabold tw-underline tw-text-center">Online <span class="tw-text-red-500">Trademark
                    Registration</span></h1>
            <div class="">
                <h3 class="tw-text-center tw-font-semibold tw-text-xl">Limited Time Offer:</h3>
                <p class="tw-text-lg tw-font-semibold">Trademark registration package starting at <span
                        class="tw-line-through">₹2499</span> ₹999, including initial consultation and document preparation
                </p>
            </div>
            <div class="mt-4">
                <ul class="tw-font-normal">
                    <li>1. Protect Your Brand, Logo & Tagline.</li>
                    <li>2. More Than 500 Brand Registered Since 2021.</li>
                    <li>3. Same Day Process.</li>
                    <li>4. 100% Online Process.</li>
                    <li>5. Lowest Cost.</li>
                </ul>
            </div>
        </div>
        <div class="">
            <h3 class="text-center tw-text-2xl tw-font-bold">
                TradeMark <span class="tw-text-red-500">Registration</span>
            </h3>
            <form class="needs-validation tw-mt-4">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control tw-bg-gray-100 tw-py-3" id="name" name="name"
                        placeholder="Enter Your Name" required />
                    <div class="invalid-feedback">
                        Please provide a full name...
                    </div>
                </div>
                <div class="mb-3 tw-hidden">
                    <input type="email" class="form-control tw-bg-gray-100 tw-py-3" id="email" name="email"
                        placeholder="Enter Your Email" value="noreply@fssai.com" required />
                    <div class="invalid-feedback">
                        Please provide a valid email...
                    </div>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control tw-bg-gray-100 tw-py-3" id="phone" name="phone"
                        placeholder="Enter Your Phone Number" required />
                    <div class="invalid-feedback">
                        Please provide a valid phone number...
                    </div>
                </div>
                <div class="mb-3">
                    <select class="form-select tw-bg-gray-100 tw-py-3" id="state" name="state"
                        aria-label="Default select example" required>
                        <option value="" selected>
                            -Select State-
                        </option>
                        @foreach ($states as $state)
                            <option value="{{ $state }}">{{ $state }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 tw-hidden">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control text-start " id="message" name="message" rows="3">
                        I have signed up!
                    </textarea>
                </div>
                <div class="d-flex justify-content-center ">
                    <button type="submit" class="tw-w-full tw-py-3 btn btn-dark btn-sm">Get Started</button>
                </div>
            </form>
        </div>
    </div>

    <div>
        <h1 class="col-md-10 m-auto mt-4 text-center fw-bold">How To do Your Trademark Registration through <br /><span
                class="text-danger">Legal Success India?</span></h1>
        <div class="row g-4">
            @foreach ($cards as $card)
                <div class="col-md-4 " style="--transition-delay: {{ $loop->iteration * 0.5 }}s">
                    <div class="card text-center h-100 border-0">
                        <img src="{{ $card['image'] }}" class="card-img-top tw-w-1/3 md:tw-w-2/5  m-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $card['title'] }}</h5>
                            <p class="card-text fw-medium">{{ $card['body'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div>
        <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold tw-text-red-600 ">
            Benefits:
        </h1>
        <ul>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">1.</span> <span
                        class="tw-font-extrabold">Legal Protection:</span> <br />Registered trademarks provide legal
                    protection against unauthorized use of your brand name, logo, or slogan. It grants the exclusive right
                    to use the mark for the goods/services it is registered for.
                </p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">2.</span> <span
                        class="tw-font-extrabold">Benefits of FSSAI RegistrationNationwide Coverage: </span> <br />In many
                    countries, registration gives you exclusive rights across the entire country, even if you only operate
                    in certain regions.
                </p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">3.</span> <span
                        class="tw-font-extrabold">Brand Recognition:</span> <br />A registered trademark helps to establish
                    and solidify your brand identity, making it easier for consumers to identify your products or services.
                </p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">4.</span> <span
                        class="tw-font-extrabold">Deterrent Against Infringement:</span> <br />The public record of a
                    registered trademark acts as a deterrent to potential infringers, as they can easily see that the mark
                    is already protected.
                </p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">5.</span> <span
                        class="tw-font-extrabold">Legal Remedies:</span> <br />You gain access to legal avenues for
                    enforcement, including the ability to sue for infringement in federal court and seek damages, including
                    statutory damages and attorney’s fees.

                </p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">6.</span> <span
                        class="tw-font-extrabold">Exclusive Rights:</span> <br />You can use the ® symbol to signify your
                    trademark’s registered status, helping to enhance the brand's prestige and value.
                </p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">7.</span> <span
                        class="tw-font-extrabold">Increased Asset Value:</span> <br />
                    A registered trademark can become an asset, which can be licensed, sold, or used as collateral to secure
                    financing.
                </p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">8.</span> <span
                        class="tw-font-extrabold">Protection Against Domain Name Theft:</span> <br />
                    Trademark registration can help prevent others from registering similar domain names that could confuse
                    your customers.
                </p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">9.</span> <span
                        class="tw-font-extrabold">Global Protection:</span> <br />
                    If you're planning to expand internationally, registering your trademark in other countries becomes
                    easier via mechanisms like the Madrid Protocol, which allows you to seek protection in multiple
                    countries with one application.

                </p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">10.</span> <span
                        class="tw-font-extrabold">Marketing Advantage:</span> <br />
                    Having a registered trademark can increase customer trust and loyalty, as it signals that your business
                    is serious and committed to protecting its brand.
                </p>
            </li>
        </ul>
    </div>
@endsection
