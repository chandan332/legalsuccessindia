@extends('layouts.root')

{{-- @php
    $polices = [
        [
            "heading" => [
                "Information We Collect", 
                "We may collect the following personal information from you:",
            ],
            "desc" => [
                "Name and contact information: This includes your name, email address, phone number, and mailing address.",
                "Demographic information: This includes your age, gender, location, and other demographic information.",
                "Website usage information: This includes information about how you use our website, such as the pages you visit and the links you click.",
                "Facebook ad information: This includes information about the Facebook ads you see and interact with, such as the ad's content, the advertiser, and your clicks and likes.",
            ]
        ],
        [
            "heading" => [
                "How We Use Your Information", 
                "We use your personal information to:",
            ],
            "desc" => [
                "Provide you with our services, such as FSSAI license filing and copyrighting.",
                "Tailor our services to your interests.",
                "Send you marketing communications, such as newsletters and promotional offers.",
                "Improve our website and services.",
                "Comply with legal and regulatory requirements.",
            ]
        ],
        [
            "heading" => [
                "How We Share Your Information", 
                "We may share your personal information with:",
            ],
            "desc" => [
                "Third-party service providers who help us operate our business, such as website hosting providers and email marketing providers.",
                "Advertisers who use our Facebook ads to reach potential customers.",
                "Government agencies or law enforcement officials if required by law.",
                "We will not share your personal information with other third parties without your consent.",
            ]
        ],
        [
            "heading" => [
                "Your Choices", 
                "You can control how we use your personal information by:",
            ],
            "desc" => [
                "Opting out of marketing communications: You can unsubscribe from our marketing emails by clicking on the 'unsubscribe' link in any marketing email we send you.",
                "Managing your cookies: You can manage your cookies by adjusting the settings in your web browser.",
            ]
        ],
    ]
@endphp

@section('content')
    <div>
        <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold tw-text-red-600 ">
            Disclaimer:
        </h1>
        <ul>
            <li class="mb-4">
                <p class="tw-text-sm tw-font-bold"><span class="tw-text-red-600">1.</span> "The products and services displayed on our website are provided by
                    third-party advertisers. We do not guarantee the
                    quality or effectiveness of these products and services.
    
                    Please note that we are not affiliated with any third-party advertiser and we are not responsible for
                    their products or
                    services.
    
                    We recommend that you conduct your own research and make an informed decision before purchasing any
                    product or service."
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

    <h1 class="tw-font-extrabold tw-text-red-600">Privacy Policy</h1>
    <div class="ms-2 ms-md-4 tw-font-bold">
        <h3 class="tw-text-red-600">Introduction</h3>
        <p class="ms-2 ms-md-4">Legal Success India ("LSI") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and disclose your personal information when you use our website, services, or Facebook ads.</p>
        @foreach ($polices as $police)
            @foreach ($police['heading'] as $head)
                <h3 class="mb-3 tw-text-red-600">{{ $head }}</h3>
            @endforeach
            @foreach ($police['desc'] as $desc)
                <p class="ms-2 ms-md-4"><i class="fa-solid fa-bolt tw-text-red-600"></i> {{ $desc }}</p>
            @endforeach
        @endforeach
    </div>
@endsection --}}

@section('content')
    <div class="tw-flex tw-flex-col tw-gap-4">
        <div>
            <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold ">Company Registration Information
            </h1>
            <ul class="tw-font-medium">
                <li>
                    <p class=""><span class="tw-font-bold">Company Name:</span> Legal Success India</p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">Registration Number:</span>
                        U70200WB2024PTC270336
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">DIN Numbers:</span>
                    <ul class="tw-ms-4">
                        <li>Azsed Anwar - 10614233</li>
                        <li>Arshed Anwar - 10614234</li>
                        <li>Office Address: 22/1 Mominpore Road, Kolkata, West Bengal, 700023</li>
                        <li>Email: info@legalsuccessindia.com</li>
                    </ul>
                    </p>
                </li>
            </ul>
        </div>

        <div>
            <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold ">Privacy Policy of Legal Success India (Khalid
                Legal
                Works Private Limited)
                GENERAL
            </h1>
            <ul class="tw-font-medium tw-flex tw-flex-col tw-gap-2 md:tw-gap-4">
                <li>
                    <p class=""><span class="tw-font-bold">a)</span> This document is an electronic record in terms of
                        the
                        Information Technology Act, 2000, and the rules thereunder as applicable, and the amended provisions
                        pertaining to electronic records in various statutes as amended by the Information Technology Act,
                        2000. This electronic record is generated by a computer system and does not require any physical or
                        digital signatures.
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">b)</span> This document is published in accordance with the
                        provisions of Rule 3 (1) of the Information Technology (Intermediaries guidelines) Rules, 2011,
                        which
                        require publishing the rules and regulations, privacy policy, and Terms of Use for access or usage
                        of
                        legal successindia.com.

                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">c)</span> The domain name www.legalsuccessindia.com
                        ("Website")
                        is owned and operated by Legal Success India (Khalid Legal Works Private Limited) and has its office
                        at
                        22/1 Mominpore Road, Kolkata, West Bengal, 700023, where such expression shall, unless repugnant to
                        the
                        context thereof, be deemed to include its respective representatives, administrators, and employees.
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">d)</span> For the purpose of this Privacy Policy
                        (“Policy”),
                        wherever the context so requires:
                    <ul class="tw-ms-4">
                        <li>
                            <p class=""><span class="tw-font-bold">i)</span> The term ‘You’ & ‘User’ shall mean any
                                legal
                                person or entity accessing or using the services provided on this Website, who is competent
                                to
                                enter into binding contracts, as per the provisions of the Indian Contract Act, 1872;
                            </p>
                        </li>
                        <li>
                            <p class=""><span class="tw-font-bold">ii)</span> The terms ‘We’, ‘Us’ & ‘Our’ shall mean
                                the
                                Website, as the context so requires.

                            </p>
                        </li>
                        <li>
                            <p class=""><span class="tw-font-bold">iii)</span> The terms ‘Party’ & ‘Parties’ shall
                                respectively be used to refer to the User and the Website individually and collectively, as
                                the
                                context so requires.


                            </p>
                        </li>
                    </ul>
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">e)</span> The headings of each section in this Policy are
                        only
                        for the purpose of organizing the various provisions under this Policy in an orderly manner and
                        shall
                        not be used by either Party to interpret the provisions contained herein in any manner. Further, it
                        is
                        specifically agreed to by the Parties that the headings shall have no legal or contractual value.
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">f)</span> The use of the Website by the User is solely
                        governed
                        by this Policy as well as the Terms of Use of the Website (“Terms”, available at
                        www.legalsuccessindia.com), and any modifications or amendments made thereto by the Website from
                        time to
                        time, at its sole discretion. Visiting the home page of the Website and/or using any of the services
                        provided on the Website shall be deemed to signify the User’s unequivocal acceptance of this Policy
                        and
                        the aforementioned Terms, and the User expressly agrees to be bound by the same. The User expressly
                        agrees and acknowledges that the Terms and Policy are co-terminus, and that expiry/termination of
                        either
                        one will lead to the termination of the other.
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">g)</span> The User unequivocally agrees that this Policy
                        and
                        the aforementioned Terms constitute a legally binding agreement between the User and the Website,
                        and
                        that the User shall be subject to the rules, guidelines, policies, terms, and conditions applicable
                        to
                        any service that is provided by the Website, and that the same shall be deemed into the Terms, and
                        shall
                        be treated as part and parcel of the same. The User acknowledges and agrees that no signature or
                        express
                        act is required to make these Terms and the Policy binding on the User and that the User’s act of
                        visiting any part of the Website constitutes the User’s full and final acceptance of the Policy and
                        the
                        aforementioned Terms.
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">h)</span> The Parties expressly agree that the Website
                        retains
                        the sole and exclusive right to amend or modify the Policy and the aforementioned Terms without any
                        prior permission or intimation to the User, and the User expressly agrees that any such amendments
                        or
                        modifications shall come into effect immediately. The User has a duty to periodically check the
                        Policy
                        and Terms and stay updated on their provisions and requirements. If the User continues to use the
                        Website following such a change, the User will be deemed to have consented to any and all
                        amendments/modifications made to the Policy and Terms. In so far as the User complies with the
                        Policy
                        and Terms, he/she is granted a personal, non-exclusive, non-transferable, revocable, limited
                        privilege
                        to enter, access, and use the Website.
                    </p>
                </li>
            </ul>
        </div>

        <div>
            <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold ">COLLECTION OF PERSONAL AND OTHER INFORMATION
            </h1>
            <ul class="tw-font-medium tw-flex tw-flex-col tw-gap-2 md:tw-gap-4">
                <li>
                    <p class=""><span class="tw-font-bold">a)</span> The User expressly agrees and acknowledges that
                        the
                        Website collects and stores the user's personal information, which is provided by the User from time
                        to
                        time on the Website, including but not limited to the User’s username, passwords, email address,
                        name,
                        address, age, date of birth, sex, nationality, shopping preferences, browsing history, etc., as well
                        as
                        any images or other information uploaded/published by the User on the Website. The User is aware
                        that
                        this information will be used by the Website to provide services and features targeted at the User,
                        that
                        are most likely to meet the User’s needs, and also to customize and improve the Website to make its
                        users’ experiences safer and easier.
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">b)</span> The User is aware that the Website may
                        automatically
                        track certain information about the User based upon the User’s IP address and the User’s behavior on
                        the
                        Website, and the User expressly consents to the same. The User is aware that this information is
                        used to
                        do internal research on user demographics, interests, and behavior, to enable the Website to better
                        understand and cater to the interests of its users. The User is expressly made aware that such
                        information may include the URL that the User visited prior to accessing the Website, the URL which
                        the
                        User subsequently visits (whether or not these URLs form a part of the Website), the User’s computer
                        &
                        web browser information, the User’s IP address, etc.
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">c)</span> If the User chooses to purchase products/services
                        from the Website, the User consents to allow the Website to collect information about the User’s
                        buying
                        behavior and trends.
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">d)</span> If the User chooses to post
                        messages/reviews/feedback
                        anywhere on the Website, including but not limited to message boards, chat rooms, or other message
                        areas, the User is aware that any and all such information provided/uploaded will be collected and
                        stored by the Website indefinitely, and that such retained information may be used to resolve
                        disputes,
                        provide customer support, troubleshoot problems.
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">e)</span> The User is aware that while he/she can browse
                        some
                        sections of the Website without being a registered user, certain activities (such as placing an
                        order)
                        require the User to provide valid personal information to the Website for the purpose of
                        registration.
                        The User is aware that the contact information provided to the Website may be used to send the User
                        offers and promotions, whether or not based on the user's previous orders and interests, and the
                        User
                        hereby expressly consents to receive the same.
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">f)</span> The User is aware that the Website may
                        occasionally
                        request the User to complete optional online surveys. These surveys may require the User to provide
                        contact information and demographic information (like zip code, age, income bracket, sex, etc.). The
                        User is aware that this data is used to customize the Website for the benefit of the User and to
                        provide
                        all users of the Website with products/services/content that the Website believes they might be
                        interested in availing of, and also to display content according to the User’s preferences.
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">g)</span> The User is further aware that the Website may
                        occasionally request the User to write reviews for products/services purchased/availed by the User
                        from
                        the Website, and also reviews for the various sellers listing their products/services on the
                        Website.
                        The User is aware that such reviews will help other users of the Website make prudent and correct
                        purchases, and also help the Website remove sellers whose products are unsatisfactory in any way,
                        and
                        the User hereby expressly authorizes the Website to publish any and all reviews written by the User
                        on
                        the Website, along with the User’s name and certain contact details, for the benefit and use of
                        other
                        Users of the Website.

                    </p>
                </li>
            </ul>
        </div>

        <div>
            <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold ">Cookies
            </h1>
            <ul class="tw-font-medium tw-flex tw-flex-col tw-gap-2 md:tw-gap-4">
                <li>
                    <p class=""><span class="tw-font-bold">a)</span> The User is aware that a cookie is a small piece
                        of information stored by a web server on a web browser so it can later be traced back from that
                        particular browser, and that cookies are useful for enabling the browser to remember information
                        specific to a given user, including but not limited to a User’s login identification, password, etc.
                        The User is aware that the Website places both permanent and temporary cookies in the User’s
                        computer's hard drive and web browser and does hereby expressly consent to the same.

                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">b)</span> The User is further aware that the Website uses
                        data collection devices such as cookies on certain pages of the Website to help analyze web page
                        flow, measure promotional effectiveness, and promote trust and safety, and that certain features of
                        the Website are only available through the use of such cookies. While the User is free to decline
                        the Website’s cookies if the User’s browser permits, the User may consequently be unable to use
                        certain features on the Website.

                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">c)</span> Additionally, the User is aware that he/she might
                        encounter ‘cookies’ or other similar devices on certain pages of the Website that are placed by
                        third parties or affiliates of the Website. The User expressly agrees and acknowledges that the
                        Website does not control the use of such cookies/other devices by third parties, that the Website is
                        in no way responsible for the same, and that the User assumes any and all risks in this regard.
                    </p>
                </li>
            </ul>
        </div>

        <div>
            <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold ">SHARING OF PERSONAL INFORMATION</h1>
            <ul class="tw-font-medium tw-flex tw-flex-col tw-gap-2 md:tw-gap-4">
                <li>
                    <p class=""><span class="tw-font-bold">a)</span> The User is aware that the Website may share the
                        User’s personal information with other corporate entities and affiliates SHARING OF PERSONAL
                        INFORMATION (continued)


                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">a)</span> The User is aware that the Website may share the
                        User’s personal information with other corporate entities and affiliates to help detect and prevent
                        identity theft, fraud, and other potentially illegal acts; correlate related or multiple accounts to
                        prevent abuse; and for other lawful purposes. The User understands that such sharing may involve
                        disclosing their personal information to service providers and partners who help the Website operate
                        its business, process transactions, and provide services.



                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">b)</span> The User acknowledges that the Website may share
                        aggregated, non-personal information about the User with third parties for marketing, advertising,
                        or other purposes. This information does not identify individual Users and may be used by third
                        parties to analyze trends and gather demographic information.

                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">c)</span> The User understands that the Website may also
                        disclose personal information when required to do so by law or in response to valid requests by
                        public authorities (such as a court or government agency).


                    </p>
                </li>
            </ul>
        </div>

        <div>
            <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold ">DATA SECURITY</h1>
            <ul class="tw-font-medium tw-flex tw-flex-col tw-gap-2 md:tw-gap-4">
                <li>
                    <p class=""><span class="tw-font-bold">a)</span> The Website takes the security of the User's
                        personal information seriously and adopts reasonable security practices and procedures, including
                        administrative, technical, and physical measures, to protect the User's information from
                        unauthorized access, use, or disclosure.
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">b)</span> However, no method of transmission over the
                        internet or method of electronic storage is 100% secure. While the Website strives to use
                        commercially acceptable means to protect personal information, it cannot guarantee its absolute
                        security.
                    </p>
                </li>
            </ul>
        </div>

        <div>
            <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold ">USER RIGHTS</h1>
            <ul class="tw-font-medium tw-flex tw-flex-col tw-gap-2 md:tw-gap-4">
                <li>
                    <p class=""><span class="tw-font-bold">a)</span> The User has the right to access, correct, or
                        delete their personal information held by the Website. The User can request to update their
                        information or request the deletion of their account and personal data by contacting the Website at
                        info@legalsuccessindia.com.
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">b)</span> The User also has the right to withdraw consent
                        for the processing of their personal information, where consent was previously given, without
                        affecting the lawfulness of processing based on consent before its withdrawal.
                    </p>
                </li>
                <li>
                    <p class=""><span class="tw-font-bold">c)</span> The User may opt-out of receiving promotional
                        communications from the Website by following the instructions provided in such communications.
                        However, the User may still receive non-promotional emails regarding their account or transactions.
                    </p>
                </li>
            </ul>
        </div>

        <div>
            <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold ">LINKS TO THIRD-PARTY WEBSITES</h1>
            <ul class="tw-font-medium tw-flex tw-flex-col tw-gap-2 md:tw-gap-4">
                <li>
                    <p class=""><span class="tw-font-bold">a)</span> The Website may contain links to other websites
                        operated by third parties. The User acknowledges that the Website has no control over such websites
                        and is not responsible for their content, privacy policies, or practices. The User is encouraged to
                        review the privacy policies of any third-party websites they visit.
                    </p>
                </li>
            </ul>
        </div>

        <div>
            <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold ">CHILDREN'S PRIVACY</h1>
            <ul class="tw-font-medium tw-flex tw-flex-col tw-gap-2 md:tw-gap-4">
                <li>
                    <p class=""><span class="tw-font-bold">a)</span> The Website does not knowingly collect personal
                        information from children under the age of 13. If the Website becomes aware that it has collected
                        personal information from a child under 13, it will take steps to delete such information. If a
                        parent or guardian becomes aware that their child has provided the Website with personal
                        information, they should contact the Website at info@legalsuccessindia.com.
                    </p>
                </li>
            </ul>
        </div>

        <div>
            <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold ">GOVERNING LAW</h1>
            <ul class="tw-font-medium tw-flex tw-flex-col tw-gap-2 md:tw-gap-4">
                <li>
                    <p class=""><span class="tw-font-bold">a)</span> This Privacy Policy shall be governed by and
                        construed in accordance with the laws of India. Any disputes arising out of or related to this
                        Policy shall be subject to the exclusive jurisdiction of the courts located in Kolkata, West Bengal,
                        India.
                    </p>
                </li>
            </ul>
        </div>

        <div>
            <h1 class="tw-mb-4 tw-text-xl md:tw-text-2xl tw-font-extrabold ">CONTACT INFORMATION</h1>
            <ul class="tw-font-medium tw-flex tw-flex-col tw-gap-2 md:tw-gap-4">
                <li>
                    <p class=""><span class="tw-font-bold">a)</span> If the User has any questions about this Privacy
                        Policy, or the practices of the Website, or the User's dealings with the Website, please contact:
                    <ul class="tw-ms-2">
                        <li>
                            <p class=""><span class="tw-font-bold">Legal Success India (Khalid Legal Works Private
                                    Limited)
                                </span>
                            </p>
                        </li>
                        <li>
                            <p class=""><span class="tw-font-bold">Office Address:</span> 22/1 Mominpore Road,
                                Kolkata, West Bengal, 700023
                            </p>
                        </li>
                        <li>
                            <p class=""><span class="tw-font-bold">Email:</span> info@legalsuccessindia.com
                            </p>
                        </li>
                    </ul>
                    </p>
                </li>
            </ul>
        </div>

    </div>
@endsection
