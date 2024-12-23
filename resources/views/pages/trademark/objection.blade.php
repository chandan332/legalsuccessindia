@extends('layouts.root')

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
@endphp

@section('content')
    <div class="tw-grid tw-grid-cols-1 md:tw-grid-cols-2">
        <div>
            {{-- <h1 class="tw-mb-4 tw-text-3xl tw-font-extrabold tw-underline">Online <span class="tw-text-red-500">Trademark
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
        </div> --}}
        </div>
        
        <div class="">
            <h3 class="text-center tw-text-2xl tw-font-bold">
                TradeMark <span class="tw-text-red-500">Objection</span>
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
@endsection
