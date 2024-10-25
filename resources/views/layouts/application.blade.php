@extends('layouts.root', ['route' => '/application'])

@php
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
            'title' => 'Get your Fssai Registration done',
            'body' => 'Registration is completed and the certificates will be sent to you.',
            'image' => '/images/user.webp',
        ],
    ];
@endphp

@section('head')
    <meta name="description"
        content="Discover the simple step-by-step process to apply for your FSSAI license online. Ensure food safety compliance and legal approval for your business" />

    <meta name="keywords"
        content="fssai registration, fssai renewal, fssai certificate, fssai license renewal, fssai licence, food safety certificate online, food license apply, fssai registration online, food license renewal, food licence apply, foscos renewal, fssai license registration, fssai renewal online, fssai license fee, fssai apply online, food licence registration, fssai registration fees, food licence renewal, fssai food license, food safety and standards authority of india, apply for fssai license, fssai licence renewal, food license fees, food licence online, fssai license apply online, food license apply online, food licence apply online, food license online apply, fssai certificate download, food license telangana, online food licence apply, fssai registration renewal, fssai license renewal online," />
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4 ">
            <div class="h-100 d-flex flex-column justify-content-center align-items-center gap-2 text-center ">
                <h1 class="text-decoration-underline tw-text-2xl fw-bold">Apply FSSAI Food License</h1>
                <h3 class="fw-semibold tw-mb-4">Limited Time Offer:<br /> FSSAI registration {{ $id }} package
                    starting at ₹999,
                    including initial consultation and document preparation </h3>
                {{-- <p class="tw-text-sm">The fastest FSSAI registration portal online, hands down. Application for 50,000
                    Food
                    Licenses Completed Since 2023.</p> --}}
                <p class="tw-text-sm">we aim to provide efficient FSSAI registration services, with applications for over
                    50,000 Food Licenses completed since 2023. This sounds more credible and less sensational. </p>
            </div>
        </div>
        <div class="col-md-5 ms-auto mt-4 px-4 fw-semibold ">
            <img src="{{ Vite::image('fssai_update.jpg') }}" alt="">
            <h3 class="text-center">FSSAI
                {{ $id }}</span></h3>
            <form class="needs-validation tw-mt-4" action="{{ route('form.submit') }}" method="POST" novalidate>
                @csrf
                <div class="mb-3">
                    {{-- <label for="name" class="form-label">Name<span class="text-danger">*</span></label> --}}
                    <input type="text" class="form-control tw-bg-gray-100 tw-py-3" id="name" name="name"
                        placeholder="Enter Your Name" required />
                    <div class="invalid-feedback">
                        Please provide a full name...
                    </div>
                </div>
                <div class="mb-3 tw-hidden">
                    {{-- <label for="email" class="form-label">Email Address<span class="text-danger">*</span></label> --}}
                    <input type="email" class="form-control tw-bg-gray-100 tw-py-3" id="email" name="email"
                        placeholder="Enter Your Email" value="noreply@fssai.com" required />
                    <div class="invalid-feedback">
                        Please provide a valid email...
                    </div>
                </div>
                <div class="mb-3">
                    {{-- <label for="phone" class="form-label">Phone Number</label> --}}
                    <input type="number" class="form-control tw-bg-gray-100 tw-py-3" id="phone" name="phone"
                        placeholder="Enter Your Phone Number" required />
                    <div class="invalid-feedback">
                        Please provide a valid phone number...
                    </div>
                </div>
                <div class="mb-3">
                    {{-- <label for="state" class="form-label">State</label> --}}
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
                {{-- <div class="tw-flex tw-items-center tw-mb-4">
                        <input id="default-checkbox" type="checkbox"
                            class="tw-w-4 tw-h-4 tw-text-blue-600 tw-bg-gray-100 tw-border-gray-300 tw-rounded  dark:tw-bg-gray-700 dark:tw-border-gray-600">
                        <label for="default-checkbox"
                            class="tw-ms-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-gray-300">Do you have
                            GST?</label>
                        <div></div>
                    </div> --}}
                <div class="d-flex justify-content-center ">
                    <button type="submit" class="tw-w-full tw-py-3 btn btn-dark btn-sm">Get Started</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row gap-2 mt-4 ">
        <div class="col tw-max-w-[1024px] m-auto">
            <h1 class="text-center fw-bold tw-underline">Sample Certificate</h1>
            <div class="tw-flex tw-flex-col tw-items-center mt-4 overflow-y-auto">
                <img src="{{ Vite::image('certificate/1.jpg') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <div>
        <h1 class="col-md-10 m-auto mt-4 text-center fw-bold">How To do Your Fssai Registration through <br /><span
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
            Disclaimer:
        </h1>
        <ul>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">1.</span> <span class="tw-font-extrabold">Reason for FSSAI Registration</span> <br/> FSSAI registration ensures your food business complies with India’s food safety laws, guaranteeing consumers high-quality and safe products, essential for legal operation and credibility.</p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">2.</span> <span class="tw-font-extrabold">Benefits of FSSAI Registration</span> <br/>FSSAI certification builds consumer trust, enhances your brand image, supports business expansion, and helps prevent legal issues by demonstrating commitment to food safety and quality.
                </p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">3.</span> <span class="tw-font-extrabold">FSSAI License Categories</span> <br/>FSSAI offers three license types based on business size and turnover: Basic Registration for small businesses, State License for medium-scale, and Central License for large-scale operations.
                </p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">4.</span> <span class="tw-font-extrabold">Document Requirements for FSSAI Registration</span> <br/>Documents needed include a completed application form, identity proof, business registration proof, and a detailed food safety management plan to verify operational compliance with FSSAI standards.</p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-bold"><span class="tw-text-red-600">5. </span>We offer guidance and information
                    about government services but don't directly process applications. Our role is to provide information
                    and guidance to help you avoid potential legal issues.
                    However, please
                    note that any information provided on this website is for informational purposes only and does not
                    constitute legal
                    advice.

                    We are a third-party company and cannot guarantee the accuracy or completeness of the information
                    provided. You should
                    conduct your own research and consult with a legal professional for advice regarding your specific
                    situation.

                    By submitting your information to our website, you acknowledge that you are doing so at your own risk.
                    You should ensure
                    that you have read all terms and conditions and understand the potential consequences before submitting
                    any information.</p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-bold"><span class="tw-text-red-600">6. </span>We provide estimated timelines
                    for your convenience, but these are subject to change. By submitting your information,
                    you agree that you have read and understood all terms and conditions, including our disclaimer regarding
                    estimated
                    timelines. We provide support, but the success of your application depends on various factors outside
                    our control .</p>
            </li>
        </ul>
    </div>

    <div>
        {{-- <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold tw-text-center">FAQ</h1> --}}
        @yield('faq')
    </div>
@endsection

@section('script')
    <script>
        (() => {
            "use strict";
            const forms = document.querySelectorAll(".needs-validation");
            Array.from(forms).forEach((form) => {
                form.addEventListener(
                    "submit",
                    (event) => {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add("was-validated");
                    },
                    false
                );
            });
        })();
    </script>
@endsection
