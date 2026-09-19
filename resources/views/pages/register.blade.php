@extends('layouts.app')

@php
    $pageTitle = 'Register — SUSTAIN 2026';
@endphp

@section('content')
<main class="register-page">

    <section class="register-section">

        <div class="container">

            <div class="register-layout">


                <!-- =================================================
                     LEFT SIDE
                ================================================== -->

                <div class="register-intro">

                    <span class="eyebrow">
                        SUSTAIN 2026 / REGISTRATION
                    </span>

                    <h1>
                        POLICY.<br>
                        ACTION.<br>
                        <span>IMPACT.</span>
                    </h1>

                    <p>
                        Join government, industry, academia, finance
                        and sustainability professionals at
                        SUSTAIN 2026.
                    </p>


                    <div class="register-event">

                        <div>

                            <span>DATE</span>

                            <strong>
                                10 NOVEMBER 2026
                            </strong>

                        </div>


                        <div>

                            <span>VENUE</span>

                            <strong>
                                BANGI AVENUE CONVENTION CENTRE
                            </strong>

                        </div>

                    </div>

                </div>


                <!-- =================================================
                     RIGHT SIDE
                ================================================== -->

                <div class="register-form-wrapper">


                    <div class="register-form-header">

                        <span class="section-index">
                            01 / REGISTER
                        </span>

                        <h2>
                            YOUR<br>
                            DETAILS
                        </h2>


                        <!-- SUCCESS MESSAGE -->
                        @if (session('success'))
                            <div class="register-message register-message--success">
                                REGISTRATION SUCCESSFUL.
                            </div>
                        @endif

                        <!-- ERROR MESSAGE -->
                        @if ($errors->any())
                            <div class="register-message register-message--error">
                                {{ $errors->first() }}
                            </div>
                        @elseif (session('error'))
                            <div class="register-message register-message--error">
                                {{ session('error') }}
                            </div>
                        @endif

                    </div>


                    @if (!session('success'))
                    <form class="register-form" action="{{ route('register.store') }}" method="post">
                        @csrf


                        <!-- =================================================
                             01. PERSONAL DETAILS
                        ================================================== -->

                        <div class="form-section-title">
                            <span>01</span>
                            PERSONAL DETAILS
                        </div>


                        <!-- TITLE -->

                        <div class="form-field">

                            <label for="title">
                                TITLE *
                            </label>

                            <select
                                id="title"
                                name="title"
                                required
                            >

                                <option value="" disabled
                                    {{ old('title') ? '' : 'selected' }}>
                                    Select title
                                </option>

                                <option value="Mr"
                                    {{ old('title') === 'Mr' ? 'selected' : '' }}>
                                    Mr
                                </option>

                                <option value="Ms"
                                    {{ old('title') === 'Ms' ? 'selected' : '' }}>
                                    Ms
                                </option>

                                <option value="Mrs"
                                    {{ old('title') === 'Mrs' ? 'selected' : '' }}>
                                    Mrs
                                </option>

                                <option value="Dr"
                                    {{ old('title') === 'Dr' ? 'selected' : '' }}>
                                    Dr
                                </option>

                                <option value="Prof"
                                    {{ old('title') === 'Prof' ? 'selected' : '' }}>
                                    Prof
                                </option>

                                <option value="Dato'"
                                    <?= ($_POST['title'] ?? '') === "Dato'" ? 'selected' : '' ?>>
                                    Dato'
                                </option>

                                <option value="Datuk"
                                    {{ old('title') === 'Datuk' ? 'selected' : '' }}>
                                    Datuk
                                </option>

                                <option value="Other"
                                    {{ old('title') === 'Other' ? 'selected' : '' }}>
                                    Other
                                </option>

                            </select>

                        </div>


                        <!-- FIRST + LAST NAME -->

                        <div class="form-row">

                            <div class="form-field">

                                <label for="first_name">
                                    FIRST NAME *
                                </label>

                                <input
                                    type="text"
                                    id="first_name"
                                    name="first_name"
                                    value="{{ old('first_name') }}"
                                    required
                                >

                            </div>


                            <div class="form-field">

                                <label for="last_name">
                                    LAST NAME *
                                </label>

                                <input
                                    type="text"
                                    id="last_name"
                                    name="last_name"
                                    value="{{ old('last_name') }}"
                                    required
                                >

                            </div>

                        </div>


                        <!-- EMAIL + MOBILE -->

                        <div class="form-row">

                            <div class="form-field">

                                <label for="email">
                                    EMAIL ADDRESS *
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                >

                            </div>


                            <div class="form-field">

                                <label for="mobile">
                                    MOBILE NUMBER *
                                </label>

                                <input
                                    type="tel"
                                    id="mobile"
                                    name="mobile"
                                    value="{{ old('mobile') }}"
                                    placeholder="+60 12 345 6789"
                                    required
                                >

                            </div>

                        </div>


                        <!-- =================================================
                             02. ORGANISATION DETAILS
                        ================================================== -->

                        <div class="form-section-title">
                            <span>02</span>
                            ORGANISATION DETAILS
                        </div>


                        <!-- ORGANISATION + ROLE -->

                        <div class="form-row">

                            <div class="form-field">

                                <label for="organisation">
                                    ORGANISATION / INSTITUTION *
                                </label>

                                <input
                                    type="text"
                                    id="organisation"
                                    name="organisation"
                                    value="{{ old('organisation') }}"
                                    required
                                >

                            </div>


                            <div class="form-field">

                                <label for="role">
                                    ROLE / DESIGNATION *
                                </label>

                                <input
                                    type="text"
                                    id="role"
                                    name="role"
                                    value="{{ old('role') }}"
                                    required
                                >

                            </div>

                        </div>


                        <!-- BUSINESS NATURE -->

                        <div class="form-field">

                            <label for="business_nature">
                                NATURE OF BUSINESS
                            </label>

                            <input
                                type="text"
                                id="business_nature"
                                name="business_nature"
                                value="{{ old('business_nature') }}"
                                placeholder="e.g. Education, Finance, Technology"
                            >

                        </div>


                        <!-- ORGANISATION TYPE -->

                        <div class="form-field">

                            <label for="organisation_type">
                                ORGANISATION TYPE *
                            </label>

                            <select
                                id="organisation_type"
                                name="organisation_type"
                                required
                            >

                                <option value="" disabled
                                    {{ old('organisation_type') ? '' : 'selected' }}>
                                    Select organisation type
                                </option>

                                <option value="government"
                                    {{ old('organisation_type') === 'government' ? 'selected' : '' }}>
                                    Government
                                </option>

                                <option value="corporate"
                                    {{ old('organisation_type') === 'corporate' ? 'selected' : '' }}>
                                    Corporate
                                </option>

                                <option value="sme"
                                    {{ old('organisation_type') === 'sme' ? 'selected' : '' }}>
                                    SME
                                </option>

                                <option value="ngo"
                                    {{ old('organisation_type') === 'ngo' ? 'selected' : '' }}>
                                    NGO / Non-Profit
                                </option>

                                <option value="academic"
                                    {{ old('organisation_type') === 'academic' ? 'selected' : '' }}>
                                    Academic / Research
                                </option>

                                <option value="financial"
                                    {{ old('organisation_type') === 'financial' ? 'selected' : '' }}>
                                    Financial Institution
                                </option>

                                <option value="professional"
                                    {{ old('organisation_type') === 'professional' ? 'selected' : '' }}>
                                    Professional Association
                                </option>

                                <option value="other"
                                    {{ old('organisation_type') === 'other' ? 'selected' : '' }}>
                                    Other
                                </option>

                            </select>

                        </div>


                        <!-- ADDRESS -->

                        <div class="form-field">

                            <label for="address">
                                ADDRESS
                            </label>

                            <textarea
                                id="address"
                                name="address"
                                rows="3"
                            >{{ old('address') }}</textarea>

                        </div>


                        <!-- POSTCODE + CITY -->

                        <div class="form-row">

                            <div class="form-field">

                                <label for="postcode">
                                    POSTCODE
                                </label>

                                <input
                                    type="text"
                                    id="postcode"
                                    name="postcode"
                                    value="{{ old('postcode') }}"
                                >

                            </div>


                            <div class="form-field">

                                <label for="city">
                                    CITY
                                </label>

                                <input
                                    type="text"
                                    id="city"
                                    name="city"
                                    value="{{ old('city') }}"
                                >

                            </div>

                        </div>


                        <!-- STATE + COUNTRY -->

                        <div class="form-row">

                            <div class="form-field">

                                <label for="state">
                                    STATE
                                </label>

                                <input
                                    type="text"
                                    id="state"
                                    name="state"
                                    value="{{ old('state') }}"
                                >

                            </div>


                            <div class="form-field">

                                <label for="country">
                                    COUNTRY *
                                </label>

                                <select
                                    id="country"
                                    name="country"
                                    required
                                >

                                    <option value="" disabled
                                        {{ old('country') ? '' : 'selected' }}>
                                        Select country
                                    </option>

                                    <option value="Malaysia"
                                        {{ old('country') === 'Malaysia' ? 'selected' : '' }}>
                                        Malaysia
                                    </option>

                                    <option value="Singapore"
                                        {{ old('country') === 'Singapore' ? 'selected' : '' }}>
                                        Singapore
                                    </option>

                                    <option value="Indonesia"
                                        {{ old('country') === 'Indonesia' ? 'selected' : '' }}>
                                        Indonesia
                                    </option>

                                    <option value="Thailand"
                                        {{ old('country') === 'Thailand' ? 'selected' : '' }}>
                                        Thailand
                                    </option>

                                    <option value="Brunei"
                                        {{ old('country') === 'Brunei' ? 'selected' : '' }}>
                                        Brunei
                                    </option>

                                    <option value="Other"
                                        {{ old('country') === 'Other' ? 'selected' : '' }}>
                                        Other
                                    </option>

                                </select>

                            </div>

                        </div>


                        <!-- =================================================
                             03. PARTICIPATION
                        ================================================== -->

                        <div class="form-section-title">
                            <span>03</span>
                            EVENT PARTICIPATION
                        </div>


                        <!-- PARTICIPANT TYPE -->

                        <div class="form-field">

                            <label for="participant_type">
                                PARTICIPANT TYPE *
                            </label>

                            <select
                                id="participant_type"
                                name="participant_type"
                                required
                            >

                                <option value="" disabled
                                    {{ old('participant_type') ? '' : 'selected' }}>
                                    Select participant type
                                </option>

                                <option value="government"
                                    {{ old('participant_type') === 'government' ? 'selected' : '' }}>
                                    Government
                                </option>

                                <option value="corporate"
                                    {{ old('participant_type') === 'corporate' ? 'selected' : '' }}>
                                    Corporate / Industry
                                </option>

                                <option value="sme"
                                    {{ old('participant_type') === 'sme' ? 'selected' : '' }}>
                                    SME
                                </option>

                                <option value="finance"
                                    {{ old('participant_type') === 'finance' ? 'selected' : '' }}>
                                    Financial Institution
                                </option>

                                <option value="professional"
                                    {{ old('participant_type') === 'professional' ? 'selected' : '' }}>
                                    Sustainability Professional
                                </option>

                                <option value="academic"
                                    {{ old('participant_type') === 'academic' ? 'selected' : '' }}>
                                    Academic / Researcher
                                </option>

                                <option value="student"
                                    {{ old('participant_type') === 'student' ? 'selected' : '' }}>
                                    Student / Young Professional
                                </option>

                                <option value="international"
                                    {{ old('participant_type') === 'international' ? 'selected' : '' }}>
                                    International Stakeholder
                                </option>

                            </select>

                        </div>


                        <!-- AREA OF INTEREST -->

                        <div class="form-field">

                            <label for="interest">
                                INTERESTED IN *
                            </label>

                            <select
                                id="interest"
                                name="interest"
                                required
                            >

                                <option value="" disabled
                                    {{ old('interest') ? '' : 'selected' }}>
                                    Select an area
                                </option>

                                <option value="conference"
                                    {{ old('interest') === 'conference' ? 'selected' : '' }}>
                                    Main Conference
                                </option>

                                <option value="symposium"
                                    {{ old('interest') === 'symposium' ? 'selected' : '' }}>
                                    Academic Symposium
                                </option>

                                <option value="awards"
                                    {{ old('interest') === 'awards' ? 'selected' : '' }}>
                                    Impact Awards
                                </option>

                                <option value="exhibition"
                                    {{ old('interest') === 'exhibition' ? 'selected' : '' }}>
                                    Industry Exhibition & Networking
                                </option>

                            </select>

                        </div>


                        <!-- =================================================
                             04. DISCOVERY
                        ================================================== -->

                        <div class="form-section-title">
                            <span>04</span>
                            HOW DID YOU HEAR ABOUT US?
                        </div>


                        <div class="form-field">

                            <label for="hear_about">
                                SOURCE
                            </label>

                            <select
                                id="hear_about"
                                name="hear_about"
                            >

                                <option value=""
                                    {{ old('hear_about') ? '' : 'selected' }}>
                                    Select an option
                                </option>

                                <option value="website"
                                    {{ old('hear_about') === 'website' ? 'selected' : '' }}>
                                    SUSTAIN 2026 Website
                                </option>

                                <option value="social_media"
                                    {{ old('hear_about') === 'social_media' ? 'selected' : '' }}>
                                    Social Media
                                </option>

                                <option value="email"
                                    {{ old('hear_about') === 'email' ? 'selected' : '' }}>
                                    Email
                                </option>

                                <option value="colleague"
                                    {{ old('hear_about') === 'colleague' ? 'selected' : '' }}>
                                    Colleague / Friend
                                </option>

                                <option value="partner"
                                    {{ old('hear_about') === 'partner' ? 'selected' : '' }}>
                                    Partner / Organisation
                                </option>

                                <option value="other"
                                    {{ old('hear_about') === 'other' ? 'selected' : '' }}>
                                    Other
                                </option>

                            </select>

                        </div>


                        <div class="form-field">

                            <label for="referral_source">
                                REFERRAL / SOURCE DETAILS
                            </label>

                            <input
                                type="text"
                                id="referral_source"
                                name="referral_source"
                                value="{{ old('referral_source') }}"
                                placeholder="Optional"
                            >

                        </div>


                        <!-- =================================================
                             05. CONSENT
                        ================================================== -->

                        <div class="form-section-title">
                            <span>05</span>
                            CONSENT
                        </div>


                        <label class="checkbox-field">

                            <input
                                type="checkbox"
                                name="consent"
                                required
                                <?= isset($_POST['consent']) ? 'checked' : '' ?>
                            >

                            <span>
                                I agree to be contacted regarding
                                SUSTAIN 2026 and receive relevant event
                                information.
                            </span>

                        </label>


                        <!-- SUBMIT -->

                        <button
                            type="submit"
                            class="button button--dark register-submit"
                        >

                            SUBMIT REGISTRATION

                            <span>↗</span>

                        </button>


                    </form>

                    @endif


                </div>

            </div>

        </div>

    </section>

</main>
@endsection
