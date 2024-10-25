@extends('layouts.root')

@empty($error)
    @php
        $error = null;
    @endphp
@endempty

@section('content')
    <div class="toast m-auto mb-4 @if(session('error')) show @endif" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto fw-bold">LegalSuccessIndia</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <p class="toast-body text-danger">
            Sorry, {{ session('error') }}.
        </p>
    </div>
    <livewire:admin.login-form />
@endsection('content')
