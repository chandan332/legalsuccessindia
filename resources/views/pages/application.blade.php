@extends('layouts.application')

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

@section('form')
    <h3 class="text-center">FSSAI
        {{ $id }}
    </h3>
    <form class="needs-validation tw-mt-4" action="{{ route('form.submit', ['id' => $id]) }}" method="POST" novalidate>
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
@endsection

@section('certificate')
    <div class="row gap-2 mt-4 ">
        <div class="col tw-max-w-[1024px] m-auto">
            <h1 class="text-center fw-bold tw-underline">Sample Certificate</h1>
            <div class="tw-flex tw-flex-col tw-items-center mt-4 overflow-y-auto">
                <img src="{{ Vite::image('certificate/1.jpg') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
