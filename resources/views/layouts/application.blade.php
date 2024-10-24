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
                <h3 class="fw-semibold tw-mb-4">Package Starts from <span
                        class="text-danger text-decoration-line-through">₹1999</span> ₹999</h3>
                <p class="tw-text-sm">The fastest FSSAI registration portal online, hands down. Application for 50,000
                    Food
                    Licenses Completed Since 2023.</p>
            </div>
        </div>
        <div class="col-md-5 ms-auto mt-4 px-4 fw-semibold ">
            <img src="{{ Vite::image('fssai_update.jpg') }}" alt="">
            <h3 class="text-center">FSSAI Registration {{ $id }}</span></h3>
            <form class="needs-validation tw-mt-4" action="{{ route('form.submit') }}" method="POST" novalidate>
                @csrf
                <div class="mb-3">
                    {{-- <label for="name" class="form-label">Name<span class="text-danger">*</span></label> --}}
                    <input type="text" class="form-control tw-bg-gray-100 tw-py-3" id="name" name="name"
                        placeholder="Your name" required />
                    <div class="invalid-feedback">
                        Please provide a full name...
                    </div>
                </div>
                <div class="mb-3 tw-hidden">
                    {{-- <label for="email" class="form-label">Email Address<span class="text-danger">*</span></label> --}}
                    <input type="email" class="form-control tw-bg-gray-100 tw-py-3" id="email" name="email"
                        placeholder="Your email" value="noreply@fssai.com" required />
                    <div class="invalid-feedback">
                        Please provide a valid email...
                    </div>
                </div>
                <div class="mb-3">
                    {{-- <label for="phone" class="form-label">Phone Number</label> --}}
                    <input type="number" class="form-control tw-bg-gray-100 tw-py-3" id="phone" name="phone"
                        placeholder="Your phone number" required />
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

    <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2">
        <div class="tw-order-2 md:tw-order-1">

            <div>
                <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold tw-text-red-600 ">
                    FSSAI Registration Overview:
                </h1>
                <ul>
                    <li class="mb-4">
                        <p class="tw-text-sm tw-font-bold">FSSAI, or
                            the
                            Food Safety and Standards Authority of India, is a regulatory body established by the Indian
                            government to ensure the safety and quality of food products in the country. Its primary role is
                            to
                            set and enforce food safety standards, regulate the manufacture, storage, distribution, sale,
                            and
                            import of food items, and promote public health by safeguarding food quality. FSSAI plays a
                            crucial
                            role in monitoring and controlling food-related issues in India, enhancing consumer awareness,
                            and
                            supporting the food industry in adhering to food safety standards.</p>
                    </li>
                    <li class="mb-4">
                        <p class="tw-text-sm tw-font-bold">Setting
                            Standards: FSSAI Registration establishes standards for various food products, including their
                            composition, additives, contaminants, and labeling requirements. These standards aim to ensure
                            the
                            safety and quality of food products.</p>
                    </li>
                    <li class="mb-4">
                        <p class="tw-text-sm tw-font-bold">Licensing
                            and
                            Registration: FSSAI Registration requires food businesses to obtain licenses or registrations
                            based
                            on the scale of their operations. This helps in maintaining a database of food businesses and
                            ensures compliance with safety and hygiene standards.</p>
                    </li>
                </ul>
            </div>
            <div>
                <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold tw-text-red-600 ">
                    Monitoring and Surveillance:
                </h1>
                <ul>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">FSSAI Registration conducts regular inspections and monitoring of
                            food businesses to ensure adherence to prescribed standards. This includes testing food product
                            samples for quality and safety.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">Consumer Awareness: FSSAI Registration contributes to creating
                            awareness among consumers about food safety and healthy eating habits. It provides information
                            and education to help the public make informed food choices.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">Enforcement: FSSAI Registration has the authority to take action
                            against non-compliant businesses, including issuing warnings, fines, and, if necessary, legal
                            actions.</p>
                    </li>
                </ul>
            </div>
            <div>
                <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold tw-text-red-600 ">Research and Development:
                </h1>
                <ul>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">FSSAI Registration promotes research in food safety and
                            standards. It collaborates with various institutions to enhance scientific understanding of food
                            safety issues.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">Capacity Building: FSSAI Registration offers training and
                            capacity-building programs to food businesses, regulators, and other stakeholders to improve
                            their knowledge of food safety regulations and best practices.</p>
                    </li>
                </ul>
            </div>
            <div>
                <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold tw-text-red-600">Benefits of Having a Food
                    License:</h1>
                <ul>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">1. Legal Compliance: Ensures your business operates within the
                            legal framework defined by the government. Operating without a valid food license can lead to
                            penalties, business closure, and legal issues.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">2. Consumer Trust and Confidence: An FSSAI license enhances
                            your credibility and demonstrates your commitment to food safety and quality, building trust
                            among consumers and fostering customer loyalty.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">3. Market Access: Many distributors, retailers, and larger
                            establishments require an FSSAI license. Holding the license allows access to a broader range of
                            markets, including institutional buyers and retail chains.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">4. Business Expansion: An FSSAI license is often required for
                            obtaining loans, grants, or support from financial institutions or government bodies when
                            expanding your business.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">5. Differentiation: In a competitive market, a Food License
                            distinguishes you from unregulated competitors. Consumers are more likely to choose products
                            from businesses compliant with food safety regulations.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">6. Quality Assurance: An FSSAI license signifies adherence to
                            specific quality and safety standards, helping maintain consistent product quality, which is
                            essential for customer retention.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">7. Consumer Safety: Ensures the safety of your products,
                            minimizing the risk of foodborne illnesses and contamination, and protecting your customers'
                            health.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">8. Legal Protection: In case of food-related incidents or
                            legal issues, an FSSAI license can serve as evidence that your business followed established
                            safety and hygiene guidelines, providing legal protection.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">9. Business Reputation: Contributes to a positive reputation
                            for your business. Positive word-of-mouth recommendations and online reviews are more likely
                            when customers view your products as safe and high-quality.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">10. Export Opportunities: Facilitates smoother export
                            processes by ensuring your products meet the necessary safety and quality standards for
                            international markets.</p>
                    </li>
                </ul>
            </div>
            <div>
                <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold tw-text-red-600">Requirement of FSSAI
                    License:</h1>
                <ul>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">- Application Form: The relevant application form must be filled
                            out accurately.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">- Business Details: Information about the nature of the food
                            business, the type of food products, and food processing methods.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">- Business Address Proof: Valid proof of the business's physical
                            address, such as a rental agreement, utility bill, or property tax receipt.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">- Proprietor/Partner/Director Details: Identity proof and
                            address proof of the proprietor, partners, or directors.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">- Food Safety Management System Plan: A written plan describing
                            the food safety management system.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">- Equipment List: List of equipment and machinery used in the
                            food business.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">- Process Flow Diagram: A diagram illustrating the flow of food
                            processing and handling.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">- Proof of Premises Possession: Proof of legal possession of the
                            premises where food-related activities are conducted.</p>
                    </li>
                    <li class="tw-mb-4">
                        <p class="tw-text-sm tw-font-bold">- No Objection Certificate (NOC): NOC from the local
                            municipality or relevant authorities.</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tw-self-center tw-order-1 md:tw-order-2">
            <img src="https://assets.zyrosite.com/YZ9VMxLvOEua5gr7/catering-Yg290qny18IpgpLQ.gif" alt="No Image">
        </div>
    </div>

    <div>
        <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold tw-text-center">FAQ</h1>
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
