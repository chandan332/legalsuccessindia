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
                Compliance </span> Serving a Significant Number of Indian Businesses
        </h1>
        <div>
            <a href="/application"
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
                Trusted by over 1000+ clients.</p>
            <p class="tw-text-sm tw-font-normal lg:tw-text-md tw-text-gray-500 dark:tw-text-gray-400">
                @for ($i = 0; $i < 5; $i++)
                    <i class="fa-solid fa-star fa-bounce tw-text-[#ff8a02]"></i>
                @endfor
            </p>
        </div>
    </div>

    {{-- Middle Section --}}
    {{-- <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2 ">
        <div class="tw-flex tw-flex-col tw-gap-4">
            <div class="dash">
                <h3 class="tw-text-4xl tw-text-center tw-font-extrabold dark:tw-text-white tw-ms-4">How Our Team Works?</h3>
            </div>
            <div class="dash">

                <p class="tw-my-4 tw-text-lg tw-text-gray-500 ms-4">Legal Success India Private Limited offers a
                    comprehensive
                    range
                    of online
                    legal services designed for your convenience. Our team consists of experienced professionals, and
                    <span class="tw-font-bold">important:</span> we are an independent private entity and are not affiliated
                    with any government agency. The forms on our website are for consultation purposes only and ain't
                    official registration forms to enhance our services for clients. By choosing to work with us,
                    you acknowledge that we are a private entity providing consultancy services for a fee. Simplify your
                    business registration process with our expertise today. Our services have received 4.9/5 ratings by
                    clients on google, contributing to a strong rating on google.
                </p>
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
            <img class="tw-rounded-2xl" src="{{ Vite::image('legalsuccessindia.jpg') }}" alt="" />
        </div>
    </div> --}}

    {{-- Middle Section --}}
    <div class="tw-flex tw-flex-col tw-items-center tw-justify-center">
        <h1 class="tw-mb-4 tw-text-3xl tw-font-extrabold tw-tracking-tight tw-underline md:tw-text-4xl tw-text-center ">
            What Our Clients Say About Us
        </h1>
        @livewire('customer')
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
                        placeholder="Enter Your Name" required />
                </div>
                <div class="tw-mb-6">
                    <label for="email"
                        class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-white">Email
                        address</label>
                    <input type="email" id="email"
                        class="tw-bg-gray-50 tw-border tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-2.5 dark:bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                        placeholder="Enter Your Email" required />
                </div>
                <div class="tw-mb-6">
                    <label for="phone"
                        class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900 dark:tw-text-white">Phone
                        Number</label>
                    <input type="tel" id="phone"
                        class="tw-bg-gray-50 tw-border tw-border-gray-300 tw-text-gray-900 tw-text-sm tw-rounded-lg focus:tw-ring-blue-500 focus:tw-border-blue-500 tw-block tw-w-full tw-p-2.5 dark:bg-gray-700 dark:tw-border-gray-600 dark:tw-placeholder-gray-400 dark:tw-text-white dark:focus:tw-ring-blue-500 dark:focus:tw-border-blue-500"
                        placeholder="Enter Your Phone" required />
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
