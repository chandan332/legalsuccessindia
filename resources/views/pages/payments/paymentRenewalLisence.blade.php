@extends('layouts.application')

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

@section('form')
    <livewire:payment.form />
@endsection
