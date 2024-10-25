@extends('layouts.application')

{{-- @php
    $id = request()->id ?? 'License';
@endphp --}}

{{-- @section('faq')
    @if ($id == 'License')
        <div class="accordion" id="accordionExample">
            <div class="accordion-item ">
                <h2 class="accordion-header ">
                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        What is FSSAI registration?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        The Food Safety and Standards Authority of India (FSSAI) is the regulatory body responsible for
                        establishing standards for food safety and regulating its supply in India.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Who needs FSSAI registration?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Any food business operator (FBO) involved in the manufacturing, processing, packaging, or selling of
                        food products needs to obtain an FSSAI registration.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What are the types of FSSAI licenses?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong> There are three types of licenses:</strong>
                        <ul>
                            <li> <code> FSSAI Registration:</code> For small-scale businesses
                                with
                                an annual turnover below
                                ₹12 lakh.</li>
                            <li> <code> State License:</code> For medium-sized businesses with
                                an annual turnover between ₹12 lakh and
                                ₹20
                                crore.</li>
                            <li><code> Central License:</code> For large businesses with an
                                annual turnover exceeding ₹20 crore or for
                                businesses
                                involved in import/export.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How can I apply for FSSAI registration?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        You can apply online through the FSSAI website by filling out the application form, submitting the
                        required documents, and paying the applicable fees.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        What documents are required for FSSAI registration?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Commonly required documents include:</strong>
                        <ul class="tw-ms-4">
                            <li class="tw-list-disc">Identity proof (Aadhaar, PAN, etc.)</li>
                            <li class="tw-list-disc">Address proof</li>
                            <li class="tw-list-disc">Business registration certificate</li>
                            <li class="tw-list-disc">Food safety management plan</li>
                            <li class="tw-list-disc">No objection certificate (if applicable)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        What are the penalties for not having FSSAI registration?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Operating without an FSSAI registration can lead to penalties, including fines and imprisonment,
                        depending on the severity of the violation.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        can I operate without FSSAI license?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong> No, you cannot operate a food business in India without an FSSAI license.</strong>
                        <ul class="tw-ms-4">
                            <li class="tw-list-disc">An FSSAI license is mandatory for all food business operators (FBOs)
                                involved in manufacturing, processing, packaging, or selling food products.</li>
                            <li class="tw-list-disc">Operating without a license can lead to legal consequences, including
                                fines, closure of the business, or imprisonment.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        How much time does it take to get FSSAI certificate?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="tw-ms-4">
                            <li class="tw-list-disc"><code>Basic Registration:</code> Typically takes about 7 to 10 days.
                            </li>
                            <li class="tw-list-disc"><code>State License:</code> Generally takes around 30 days.</li>
                            <li class="tw-list-disc"><code>Central License:</code> Can take 30 to 60 days or more,
                                depending on the complexity.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @elseif ($id == 'Renewal')
        <div class="accordion" id="accordionExample">
            <div class="accordion-item ">
                <h2 class="accordion-header ">
                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is FSSAI registration renewal?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        It is the process of extending the validity of your FSSAI registration to continue operating legally
                        in the food business.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        when should I renew my FSSAI registration?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Renewals should be completed at least 30 days before the expiration date of your
                        current registration.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What documents are required for FSSAI renewal?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Commonly required documents include:
                        </strong>
                        <ul class="tw-ms-4">
                            <li class="tw-list-disc">Application form (Form B)
                            </li>
                            <li class="tw-list-disc">Copy of the current FSSAI registration
                            </li>
                            <li class="tw-list-disc">Proof of address
                            </li>
                            <li class="tw-list-disc">Food safety management system documentation</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How can I apply for FSSAI renewal?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        FSSAI license renewal can typically be done online through US.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        How much does it cost to renew an FSSAI license?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        The cost to renew an FSSAI license in India varies depending on the type of license (basic, state,
                        or central) and the size of the business. Generally, the renewal fees can range from a few hundred
                        to several thousand rupees. It's best to check the official FSSAI website or consult with local
                        authorities for specific fees related to your business type and scale.
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection --}}
