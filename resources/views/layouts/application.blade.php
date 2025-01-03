@extends('layouts.root', ['route' => '/application'])

@php
    $cards = [
        [
            'title' => 'Reach out to our Experts',
            'body' => 'We have the best business experts who can resolve all your queries',
            'image' => '/images/tech-support.gif',
        ],
        [
            'title' => 'Provide all the required documents',
            // 'body' => 'Provide all the documents. Our team will initiate the paperwork on your behalf',
            'body' => 'Provide the necessary documents, and our team will guide you in initiating the paperwork',
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
            <div class="tw-mt-10 tw-flex tw-flex-col tw-items-center tw-text-center tw-gap-2 tw-sticky tw-top-24">
                <h1 class="text-decoration-underline tw-text-2xl fw-bold">Apply FSSAI Food License</h1>
                <h3 class="fw-semibold tw-mb-4">Special pricing:<br /> FSSAI registration {{ $id }} package
                    starting at ₹999,
                    the package includes initial consultation, decument preparation, and submission consultancy support</h3>
                {{-- <p class="tw-text-sm">we aim to provide efficient FSSAI registration services, with applications for over
                    50,000 Food Licenses completed since 2023. This sounds more credible and less sensational. </p> --}}
            </div>
        </div>
        <div class="col-md-5 ms-auto mt-4 px-4 fw-semibold ">
            <img src="{{ Vite::image('fssai_update.jpg') }}" alt="">
            @yield('form')
        </div>
    </div>

    @yield('certificate')

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
            Benefits:
        </h1>
        <ul>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">1.</span> <span
                        class="tw-font-extrabold">Reason for FSSAI Registration</span> <br /> FSSAI registration ensures
                    your food business complies with India’s food safety laws, guaranteeing consumers high-quality and safe
                    products, essential for legal operation and credibility.</p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">2.</span> <span
                        class="tw-font-extrabold">Benefits of FSSAI Registration</span> <br />FSSAI certification builds
                    consumer trust, enhances your brand image, supports business expansion, and helps prevent legal issues
                    by demonstrating commitment to food safety and quality.
                </p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">3.</span> <span
                        class="tw-font-extrabold">FSSAI License Categories</span> <br />FSSAI offers three license types
                    based on business size and turnover: Basic Registration for small businesses, State License for
                    medium-scale, and Central License for large-scale operations.
                </p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-semibold"><span class="tw-text-red-600">4.</span> <span
                        class="tw-font-extrabold">Document Requirements for FSSAI Registration</span> <br />Documents needed
                    include a completed application form, identity proof, business registration proof, and a detailed food
                    safety management plan to verify operational compliance with FSSAI standards.</p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-bold"><span class="tw-text-red-600">5. </span>We offer guidance and information
                    about government services but don't directly process applications. we provide information and guidence
                    to assist with compliance; final legal reponsibility lies with the user.
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
                <p class="tw-text-sm tw-font-bold"><span class="tw-text-red-600">6. </span>Estimated timelines depend on
                    factors such as document verification and govenment processing times and may vary accordingly. By
                    submitting your information,
                    you agree that you have read and understood all terms and conditions, including our disclaimer regarding
                    estimated
                    timelines. We provide support, but the success of your application depends on factors like govenment
                    processing and accurate document submission.</p>
            </li>
        </ul>
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
