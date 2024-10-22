@extends('layouts.root', ['route' => '/'])

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 18px;
            font-size: 22px;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    {{-- Hero Section --}}
    <div class="tw-my-10 tw-flex tw-flex-col tw-justify-center tw-gap-2 md:tw-gap-4 text-center">
        <p class="tw-text-lg tw-font-normal tw-text-gray-500 lg:tw-text-xl sm:tw-px-16 xl:tw-px-48 dark:tw-text-gray-400">
            Welcome to <span class="text-primary typedjs"></span>, Where business meets opportunity.</p>
        <h1 class="tw-mb-4 tw-text-3xl tw-font-extrabold tw-tracking-tight  md:tw-text-6xl lg:tw-text-7xl ">
            <span class="tw-text-transparent tw-bg-clip-text tw-bg-gradient-to-r tw-to-emerald-600 tw-from-sky-400"> Experts
                in Law and
                Compliance </span> Serving More Than 10% of Indian Businesses
        </h1>
        <div>
            <a href="#"
                class="tw-inline-flex tw-items-center tw-justify-center tw-px-5 tw-py-3 tw-text-base tw-font-medium tw-text-white tw-bg-blue-700 tw-rounded-lg hover:tw-bg-blue-800 focus:tw-ring-4 focus:tw-ring-blue-300 dark:tw-focus:ring-blue-900">
                Get Started
                <svg class="tw-w-3.5 tw-h-3.5 tw-ms-2 rtl:tw-rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
        <div class="tw-flex tw-flex-col tw-gap-2">
            <p class="tw-text-sm tw-font-normal lg:tw-text-md tw-text-gray-500 dark:tw-text-gray-400">
                Trusted by countless satisfied clients.</p>
            <p class="tw-text-sm tw-font-normal lg:tw-text-md tw-text-gray-500 dark:tw-text-gray-400">
                @for ($i = 0; $i < 5; $i++)
                    <i class="fa-solid fa-star fa-bounce tw-text-[#ff8a02]"></i>
                @endfor
            </p>
        </div>
    </div>

    {{-- Middle Section --}}
    <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 ">
        <div class="tw-flex tw-flex-col tw-gap-4">
            <div class="dash">
                <h3 class="tw-text-4xl tw-text-center tw-font-extrabold dark:tw-text-white tw-ms-4">How Our Team Works?</h3>
            </div>
            <div class="dash">

                <p class="tw-my-4 tw-text-lg tw-text-gray-500 ms-4">Legal Success India Private Limited offers a
                    comprehensive
                    range
                    of online
                    legal services designed for your convenience. Our team consists of experienced professionals, and we
                    want to
                    make it clear that we are not affiliated with any government agency. The form available on our
                    website
                    is
                    intended solely for gathering information to enhance our services for clients. By choosing to work
                    with
                    us,
                    you acknowledge that we are a private entity providing consultancy services for a fee. Simplify your
                    business registration process with our expertise today. Join the community of over 10,000 satisfied
                    clients
                    and benefit from our impressive 4.9 out of 5.0 rating on Google.</p>
            </div>
            <div class="dash">
                <div class="tw-flex tw-flex-row tw-gap-4 tw-ms-4">
                    <div class="tw-flex tw-flex-col tw-gap-2">
                        <p class=" tw-text-4xl">150+</p>
                        <p class="tw-text-lg tw-text-gray-500 tw-font-medium">Expert Legal</p>
                    </div>
                    <div class="tw-flex tw-flex-col tw-gap-2">
                        <p class=" tw-text-4xl">15</p>
                        <p class="tw-text-lg tw-text-gray-500 tw-font-medium">Trusted by Businesses</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tw-p-4">
            <img class="tw-rounded-2xl"
                src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixid=M3wzOTE5Mjl8MHwxfHNlYXJjaHw1fHxsZWdhbCUyMGNvbnN1bHRhbmN5fGVufDB8fHx8MTcyNjAwNTY0Nnww&ixlib=rb-4.0.3&auto=format&fit=crop&w=562&h=480"
                alt="">
        </div>
    </div>

    {{-- Middle Section --}}
    <div class="tw-flex tw-flex-col tw-items-center tw-justify-center">
        <h1 class="tw-mb-4 tw-text-3xl tw-font-extrabold tw-tracking-tight tw-underline md:tw-text-4xl ">
            Reviews
        </h1>
        <div class="swiper mySwiper mask-image tw-w-full">
            <div class="swiper-wrapper">
                @for ($i = 0; $i < 5; $i++)
                    <div class="swiper-slide">
                        <div class="tw-w-full tw-h-full tw-max-w-sm tw-border tw-rounded-lg tw-bg-white tw-shadow tw-p-2">
                            <div class="tw-flex tw-flex-col tw-items-center tw-pb-10">
                                <img class="tw-w-24 tw-h-24 tw-mb-3 tw-rounded-full"
                                    src="data:image/jpeg;base64,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"
                                    alt="Bonnie image" />
                                <h5 class="tw-mb-1 tw-text-xl tw-font-medium tw-text-gray-900 dark:tw-text-white">Bonnie
                                    Green</h5>
                                <span class="tw-text-sm tw-text-gray-500 dark:tw-text-gray-400">Visual Designer</span>
                                <p class="tw-text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Consectetur
                                    voluptatibus temporibus</p>
                                <p
                                    class="tw-text-sm tw-font-normal lg:tw-text-md tw-text-gray-500 tw-text-center dark:tw-text-gray-400">
                                    @for ($j = 0; $j < 5; $j++)
                                        <i class="fa-solid fa-star fa-bounce tw-text-[#ff8a02]"></i>
                                    @endfor
                                </p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    {{-- Last Section --}}
    <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2">
        <div class="tw-flex tw-flex-col tw-gap-2 tw-justify-center tw-p-5">
            <p class="tw-text-4xl dark:tw-text-white">Contact Legal Succcess India</h3>
            <p class="tw-my-4 tw-text-md tw-text-gray-500">Reach out to us for expert legal consultancy and support in
                navigating business regulations and compliance. We're here to help you succeed</p>

            <div class="tw-flex tw-flex-col tw-gap-4 tw-text-sm">
                <div class="tw-flex tw-flex-col tw-gap-2">
                    <p class="tw-font-medium">connect</p>
                    <p class=" tw-text-gray-500 ">+91 6290634766</p>
                </div>
                <div class="tw-flex tw-flex-col tw-gap-2">
                    <p class="tw-font-medium ">Reach</p>
                    <p class=" tw-text-gray-500 ">info@legalsuccessindia.com</p>
                </div>
            </div>
        </div>
        <div class="tw-p-5">
            <form action="">
                <div class="tw-mb-6">
                    <label for="name"
                        class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-white">Full
                        Name</label>
                    <input type="text" id="name"
                        class="tw-bg-gray-50 tw-border tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-2.5 dark:bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                        placeholder="john.doe@company.com" required />
                </div>
                <div class="tw-mb-6">
                    <label for="email"
                        class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-white">Email
                        address</label>
                    <input type="email" id="email"
                        class="tw-bg-gray-50 tw-border tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-2.5 dark:bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                        placeholder="john.doe@company.com" required />
                </div>
                <div class="tw-mb-6">
                    <label for="phone"
                        class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-white">Phone
                        Number</label>
                    <input type="tel" id="phone"
                        class="tw-bg-gray-50 tw-border tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-2.5 dark:bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                        placeholder="john.doe@company.com" required />
                </div>
                <div class="tw-mb-6">
                    <label for="message"
                        class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-white">Your
                        message</label>
                    <textarea id="message" rows="4"
                        class="tw-block tw-p-2.5 tw-w-full tw-text-sm tw-text-gray-900 tw-bg-gray-50 tw-rounded-lg tw-border tw-border-gray-300 focus:tw-ring-blue-500 focus:tw-border-blue-500 dark:tw-bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                        placeholder="Write your thoughts here..."></textarea>

                </div>
                <button type="submit"
                    class="tw-text-white tw-bg-blue-700 hover:tw-bg-blue-800 focus:tw-ring-4 focus:tw-outline-none focus:tw-ring-blue-300 tw-font-medium tw-rounded-lg tw-text-sm tw-w-full sm:tw-w-auto tw-px-5 tw-py-2.5 tw-text-center dark:tw-bg-blue-600 dark:hover:tw-bg-blue-700 dark:focus:tw-ring-blue-800">Submit</button>
            </form>

        </div>
    </div>
@endsection

@section('script')
    <!-- Load library from the CDN -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('.typedjs', {
            strings: ['Legal success india'],
            startDelay: 2000,
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1000,
            loop: true,
            onDestroy: (self) => {
                alert('destroyed');
            },
        });
        window.addEventListener('beforeunload', function() {
            typed.destroy();
        });
    </script>

    {{-- swiper min js --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // var swiper = new Swiper(".mySwiper", {
        //     effect: "cards",
        //     grabCursor: true,
        //     loop: true,
        //     cardsEffect: {
        //         perSlideOffset: 30,
        //         perSlideRotate: 0,
        //         slideShadows: true,
        //     },
        //     freeMode: {
        //         enabled: true
        //     },
        //     autoplay: {
        //         delay: 3000,
        //         pauseOnMouseEnter: true
        //     },
        // });

        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            slidesPerView: 1,
            spaceBetween: 50,
            loop: true,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
            freeMode: {
                enabled: true
            },
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            autoplay: {
                delay: 3000,
                pauseOnMouseEnter: true
            },
        })
    </script>
@endsection
