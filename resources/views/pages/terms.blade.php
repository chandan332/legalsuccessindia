@extends('layouts.root')

@php
    $terms = [
        [
            "title" => "Business Information",
            "desc" => "Legal Success India22/1 Mominpore Road, Kolkata 700023",
        ],
        [
            "title" => "Services",
            "desc" => "Legal Success India ('LSI') offers email copywriting and email automation services, including daily newsletters and advertisements for various services."
        ],
        [
            "title" => "Payment Terms",
            "desc" => "Full payment for services is required before work commences."
        ],
        [
            "title" => " Refund or Cancellation Policy",
            "desc" => "If no work has been performed, a full refund will be issued within 15 working days."
        ],
        [
            "title" => " Handling of Client Data and Privacy",
            "desc" => "LSI is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and disclose your personal information when you use our website, services, or Facebook ads."
        ],
        [
            "title" => "Disclaimers and Limitations of Liability",
            "desc" => "While LSI strives for accuracy, we do not make warranties regarding the completeness, accuracy, reliability, or availability of the content. Your use of our services is at your own risk. LSI shall not be liable for any direct, indirect, consequential, special, or incidental damages."
        ],
        [
            "title" => "Contact Information for Support or Inquiries",
            "desc" => "Phone: +91 9007299384 Phone: +91 6290634766 Email: info@legalsuccessindia.com We aim to respond promptly to inquiries and provide support to ensure a positive experience for our users."
        ],
        [
            "title" => "Governing Law",
            "desc" => "These terms and conditions shall be governed by and construed in accordance with the laws of India."
        ],
        [
            "title" => "Changes to Terms",
            "desc" => "LSI reserves the right to update or modify these terms and conditions at any time without prior notice. Users are responsible for reviewing these terms periodically."
        ]
    ]
@endphp

@section('content')
    <div>
        <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold tw-text-red-600 ">
            Disclaimer:
        </h1>
        <ul>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-bold"><span class="tw-text-red-600">1.</span> "The products and services displayed on our website are provided by third-party advertisers. We do not guarantee the
                quality or effectiveness of these products and services.
                
                Please note that we are not affiliated with any third-party advertiser and we are not responsible for their products or
                services.
                
                We recommend that you conduct your own research and make an informed decision before purchasing any product or service."
                </p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-bold"><span class="tw-text-red-600">2.</span> While we provide information related to government documents and services, we do not directly provide these services
                ourselves. Our role is to provide information and guidance to help you avoid potential legal issues. However, please
                note that any information provided on this website is for informational purposes only and does not constitute legal
                advice.
                
                We are a third-party company and cannot guarantee the accuracy or completeness of the information provided. You should
                conduct your own research and consult with a legal professional for advice regarding your specific situation.  
                
                By submitting your information to our website, you acknowledge that you are doing so at your own risk. You should ensure
                that you have read all terms and conditions and understand the potential consequences before submitting any information.
                </p>
            </li>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-bold"><span class="tw-text-red-600">3.</span> We provide estimated timelines for your convenience, but these are subject to change. By submitting your information,
                you agree that you have read and understood all terms and conditions, including our disclaimer regarding estimated
                timelines. You understand that your use of our services is at your own risk and that we cannot guarantee the outcome of
                your application.
                </p>
            </li>
        </ul>
    </div>
    <h1 class="tw-font-extrabold"><span class="tw-text-red-600 ">##</span> Legal Success India - Terms and Conditions</h1>
    <div class="ms-2 ms-md-4 ">
        @foreach ($terms as $term)
        <div class="tw-my-4">
            <h4 class="tw-text-lg tw-font-bold tw-text-red-600">**{{$loop->index + 1}}. {{$term['title']}} :</h4>
            <p class="tw-text-sm tw-font-semibold">{{$term['desc']}}</p>
        </div>
        @endforeach
        <p class="tw-font-semibold">By using our services, you agree to these terms and conditions.</p>
    </div>
@endsection