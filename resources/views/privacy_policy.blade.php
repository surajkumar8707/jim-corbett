@extends('layouts.app')

@section('pageTitle', 'Privacy Policy')
@section('ogTitle', 'Privacy Policy')
@section('ogDescription', "Learn about our commitment to protecting your privacy and personal information at ". getSettings()->app_name .". Our Privacy Policy outlines how we collect, use, and safeguard your data to ensure a secure and transparent experience for all our visitors.")
@section('twitterTitle', 'Privacy Policy')
@section('twitterDescription', "Learn about our commitment to protecting your privacy and personal information at ". getSettings()->app_name .". Our Privacy Policy outlines how we collect, use, and safeguard your data to ensure a secure and transparent experience for all our visitors.")
@section('keywords', 'Privacy Policy')
@section('description', "Learn about our commitment to protecting your privacy and personal information at ". getSettings()->app_name .". Our Privacy Policy outlines how we collect, use, and safeguard your data to ensure a secure and transparent experience for all our visitors.")

@section('content')
    <!-- Page Header -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Privacy and Policy</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Privacy and Policy</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Main Content -->
    <div class="container py-5">
        <center>
            <h1 class="text-primary">Privacy and Policy</h1>
        </center>

        <div class="privacy-policy-content">
            <p>
                {{ getSettings()->app_name }} is committed to protecting the privacy of its users. This Privacy Policy outlines how we
                collect, use, disclose, and protect your personal information when you use our website <a href="{{ route('home') }}">{{ route('home') }}</a>
                or any related services (collectively, the "Service").
            <p>
            <h3 class="text-primary">Information Collection and Use</h3>
            <p>
                Personal Information: We may collect personal information such as your name, email address, postal address,
                phone number, or payment information when you register for an account, make a purchase, or engage with our
                Service in other ways. We use this information to provide and improve our Service, communicate with you, and
                fulfill your requests.
            </p>
            <p>
                Non-Personal Information: We also collect non-personal information such as your IP address, browser type,
                device identifiers, and usage data to analyze trends, administer the Service, track users' movements, and
                gather demographic information for aggregate use.
            </p>

            <h3 class="text-primary">Cookies and Tracking Technologies</h3>
            <p>
                We use cookies, web beacons, and similar tracking technologies to enhance your experience on our website,
                personalize content and ads, analyze user behavior, and track referral sources. You can control cookies
                through your browser settings and opt-out of targeted advertising from third-party providers.
            </p>

            <h3 class="text-primary">Data Sharing and Disclosure</h3>
            <p>
                We may share your personal information with third-party service providers who assist us in operating our
                website, conducting our business, or servicing you. These parties are contractually obligated to use your
                information only as necessary to provide the services they offer.

                <br>
                We may also disclose your information in response to legal requests, to protect our rights or property, or
                to enforce our policies and agreements.
            </p>

            <h3 class="text-primary">Data Security</h3>
            <p>
                We take reasonable measures to protect your personal information from unauthorized access, disclosure,
                alteration, or destruction. However, no method of transmission over the internet or electronic storage is
                100% secure, and we cannot guarantee absolute security.
            </p>

            <h3 class="text-primary">Changes to this Privacy Policy</h3>
            <p>
                We may update this Privacy Policy from time to time to reflect changes in our practices or legal
                requirements. We will notify you of any material changes by posting the updated policy on this page.
            </p>

            <h3 class="text-primary">Contact Us</h3>
            <p>
                If you have any questions or concerns about our Privacy Policy or our practices regarding your personal
                information, please contact us at <a href="mailto:{{ getSettings()->email }}">{{ getSettings()->email }}</a>.
            </p>

            {{-- @dd(getSettings()) --}}
            </p>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
