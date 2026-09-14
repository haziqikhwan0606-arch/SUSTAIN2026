<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        {{ $pageTitle ?? 'Registrations � SUSTAIN 2026' }}
    </title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family:
                Arial,
                Helvetica,
                sans-serif;
            background: #f3f3f0;
            color: #111;
        }

        .admin {
            min-height: 100vh;
        }

        /* =================================================
           HEADER
        ================================================= */

        .admin-header {
            background: #111;
            color: white;

            padding:
                28px
                5vw;

            display: flex;
            justify-content: space-between;
            align-items: center;

            border-bottom:
                4px solid
                #c8ff00;
        }

        .admin-brand {
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -.04em;
        }

        .admin-brand span {
            color: #c8ff00;
        }

        .admin-actions {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .admin-label {
            font-size: 12px;
            letter-spacing: .15em;
            opacity: .6;
        }

        .logout-btn {
            color: white;
            text-decoration: none;

            font-size: 11px;
            font-weight: 700;

            letter-spacing: .08em;

            padding:
                10px
                14px;

            border:
                1px solid
                rgba(255,255,255,.3);
        }

        .logout-btn:hover {
            background: white;
            color: #111;
        }

        /* =================================================
           MAIN
        ================================================= */

        .admin-main {
            width:
                min(1400px, 90%);

            margin: 0 auto;

            padding:
                60px 0;
        }

        /* =================================================
           HEADING
        ================================================= */

        .admin-heading {
            margin-bottom: 40px;
        }

        .admin-heading small {
            display: block;

            font-size: 12px;
            letter-spacing: .15em;

            margin-bottom: 12px;

            opacity: .6;
        }

        .admin-heading h1 {
            margin: 0;

            font-size:
                clamp(
                    3rem,
                    7vw,
                    6rem
                );

            line-height: .85;

            letter-spacing: -.06em;
        }

        .admin-heading h1 span {
            color: #777;
        }

        /* =================================================
           TOTAL
        ================================================= */

        .total-card {
            background: white;

            border:
                1px solid
                #ddd;

            padding: 28px;

            margin-bottom: 40px;

            display: flex;

            justify-content: space-between;
            align-items: flex-end;
        }

        .total-label {
            display: block;

            font-size: 11px;
            letter-spacing: .12em;

            margin-bottom: 12px;

            opacity: .55;
        }

        .total-number {
            font-size: 64px;
            font-weight: 800;

            line-height: .9;

            letter-spacing: -.06em;
        }

        .total-description {
            font-size: 13px;
            color: #777;
        }

        /* =================================================
           FILTER TOOLBAR
        ================================================= */

        .toolbar {
            margin-bottom: 20px;
        }

        .filter-form {
            display: grid;

            grid-template-columns:
                2fr
                1fr
                1fr
                auto
                auto;

            gap: 10px;

            width: 100%;
        }

        .filter-form input,
        .filter-form select {

            width: 100%;

            padding: 16px;

            border:
                1px solid
                #bbb;

            background: white;

            font-size: 14px;

            font-family: inherit;

            color: #111;

            outline: none;
        }

        .filter-form input:focus,
        .filter-form select:focus {
            border-color: #111;
        }

        .filter-form button {

            padding:
                16px
                24px;

            border: none;

            background: #111;

            color: white;

            font-weight: 700;

            cursor: pointer;

            font-family: inherit;
        }

        .filter-form button:hover {
            background: #333;
        }

        .filter-form a {

            display: flex;

            align-items: center;
            justify-content: center;

            padding:
                0
                18px;

            border:
                1px solid
                #111;

            color: #111;

            background: transparent;

            text-decoration: none;

            font-size: 12px;

            font-weight: 700;
        }

        .filter-form a:hover {

            background: #111;

            color: white;
        }

        /* =================================================
           RESULTS INFO
        ================================================= */

        .results-info {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 12px;

            font-size: 12px;

            color: #666;
        }

        .results-info strong {
            color: #111;
        }

        /* =================================================
           TABLE
        ================================================= */

        .table-wrapper {

            background: white;

            border:
                1px solid
                #ddd;

            overflow-x: auto;

            width: 100%;
        }

        table {

            width: 100%;

            border-collapse: collapse;

            min-width: 2500px;
        }

        th {

            background: #111;

            color: white;

            text-align: left;

            padding: 16px;

            font-size: 11px;

            letter-spacing: .08em;

            white-space: nowrap;

            position: sticky;

            top: 0;

            z-index: 2;
        }

        td {

            padding:
                16px;

            border-bottom:
                1px solid
                #e5e5e5;

            font-size: 13px;

            vertical-align: top;

            max-width: 280px;

            word-break: break-word;
        }

        tbody tr:hover td {
            background: #f8f8f5;
        }

        /* =================================================
           TABLE CONTENT
        ================================================= */

        .id {
            color: #777;
            font-weight: 700;
        }

        .name {
            font-weight: 700;

            white-space: nowrap;
        }

        .email {
            color: #555;
        }

        .mobile {
            white-space: nowrap;
        }

        .type {

            display: inline-block;

            padding:
                6px
                9px;

            background: #eee;

            font-size: 10px;

            font-weight: 700;

            text-transform: uppercase;

            white-space: nowrap;
        }

        .interest {
            font-weight: 600;
        }

        .consent-yes {

            display: inline-block;

            padding:
                5px
                8px;

            background: #c8ff00;

            color: #111;

            font-size: 10px;

            font-weight: 800;

            white-space: nowrap;
        }

        .consent-no {

            display: inline-block;

            padding:
                5px
                8px;

            background: #eee;

            color: #777;

            font-size: 10px;

            font-weight: 800;

            white-space: nowrap;
        }

        .date {

            white-space: nowrap;

            color: #666;

            font-size: 12px;
        }

        .empty {

            padding: 60px;

            text-align: center;

            color: #777;
        }

        /* =================================================
           RESPONSIVE
        ================================================= */

        @media (max-width: 1000px) {

            .filter-form {

                grid-template-columns:
                    1fr
                    1fr;
            }

            .filter-form input {

                grid-column:
                    1 / -1;
            }

            .filter-form button,
            .filter-form a {

                min-height: 48px;
            }

        }

        @media (max-width: 600px) {

            .admin-header {

                padding:
                    22px
                    5vw;
            }

            .admin-brand {
                font-size: 20px;
            }

            .admin-label {
                display: none;
            }

            .admin-main {

                padding:
                    40px
                    0;
            }

            .total-card {

                display: block;
            }

            .total-description {

                margin-top: 20px;
            }

            .filter-form {

                grid-template-columns: 1fr;
            }

            .filter-form input {

                grid-column: auto;
            }

            .results-info {

                display: block;
            }

            .admin-actions {
                gap: 10px;
            }

        }

    </style>

</head>

<body>

<div class="admin">

    <!-- =================================================
         HEADER
    ================================================== -->

    <header class="admin-header">

        <div class="admin-brand">

            SUSTAIN
            <span>2026</span>

        </div>

        <div class="admin-actions">

            <div class="admin-label">
                ADMIN / REGISTRATIONS
            </div>

            <a
                href="{{ route('admin.logout') }}"
                class="logout-btn"
            >
                LOG OUT →
            </a>

        </div>

    </header>


    <!-- =================================================
         MAIN
    ================================================== -->

    <main class="admin-main">

        <!-- HEADING -->

        <div class="admin-heading">

            <small>
                SUSTAIN 2026 / ADMIN PANEL
            </small>

            <h1>
                REGISTRATION<br>
                <span>DATABASE.</span>
            </h1>

        </div>


        <!-- =================================================
             TOTAL REGISTRATIONS
        ================================================== -->

        <section class="total-card">

            <div>

                <span class="total-label">
                    TOTAL REGISTRATIONS
                </span>

                <div class="total-number">
                    {{ $total ?? $totalCount }}
                </div>

            </div>

            <div class="total-description">
                Registered participants
            </div>

        </section>


        <!-- =================================================
             FILTERS
        ================================================== -->

        <div class="toolbar">

            <form
                class="filter-form"
                method="get"
            >

                <!-- SEARCH -->

                <input
                    type="text"
                    name="search"
                    placeholder="Search name, email, organisation, mobile..."
                    value="{{ request('search') }}"
                >


                <!-- PARTICIPANT TYPE -->

                <select name="participant_type">

                    <option value="">
                        All participant types
                    </option>

                    <option
                        value="government"
                        {{ request('participant_type') === 'government' ? 'selected' : '' }}
                    >
                        Government
                    </option>

                    <option
                        value="corporate"
                        {{ request('participant_type') === 'corporate' ? 'selected' : '' }}
                    >
                        Corporate / Industry
                    </option>

                    <option
                        value="sme"
                        {{ request('participant_type') === 'sme' ? 'selected' : '' }}
                    >
                        SME
                    </option>

                    <option
                        value="finance"
                        {{ request('participant_type') === 'finance' ? 'selected' : '' }}
                    >
                        Financial Institution
                    </option>

                    <option
                        value="professional"
                        {{ request('participant_type') === 'professional' ? 'selected' : '' }}
                    >
                        Sustainability Professional
                    </option>

                    <option
                        value="academic"
                        {{ request('participant_type') === 'academic' ? 'selected' : '' }}
                    >
                        Academic / Researcher
                    </option>

                    <option
                        value="student"
                        {{ request('participant_type') === 'student' ? 'selected' : '' }}
                    >
                        Student / Young Professional
                    </option>

                    <option
                        value="international"
                        {{ request('participant_type') === 'international' ? 'selected' : '' }}
                    >
                        International Stakeholder
                    </option>

                </select>


                <!-- INTEREST -->

                <select name="interest">

                    <option value="">
                        All areas of interest
                    </option>

                    <option
                        value="conference"
                        {{ request('interest') === 'conference' ? 'selected' : '' }}
                    >
                        Main Conference
                    </option>

                    <option
                        value="symposium"
                        {{ request('interest') === 'symposium' ? 'selected' : '' }}
                    >
                        Academic Symposium
                    </option>

                    <option
                        value="awards"
                        {{ request('interest') === 'awards' ? 'selected' : '' }}
                    >
                        Impact Awards
                    </option>

                    <option
                        value="exhibition"
                        {{ request('interest') === 'exhibition' ? 'selected' : '' }}
                    >
                        Industry Exhibition & Networking
                    </option>

                </select>


                <!-- FILTER -->

                <button type="submit">
                    FILTER
                </button>


                <!-- CLEAR -->

                @if (request('search') || request('participant_type') || request('interest'))

                    <a href="{{ route('admin.registrations') }}">
                        CLEAR
                    </a>

                @endif

            </form>

        </div>


        <!-- =================================================
             RESULTS INFO
        ================================================== -->

        <div class="results-info">

            <div>

                Showing

                <strong>
                    {{ $registrations->count() }}
                </strong>

                registration(s)

            </div>

            @if (request('search') || request('participant_type') || request('interest'))

                <div>
                    Filters applied
                </div>

            @endif

        </div>


        <!-- =================================================
             REGISTRATION TABLE
        ================================================== -->

        <div class="table-wrapper">

            <table>

                <thead>

                    <tr>

                        <th>ID</th>
                        <th>TITLE</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>EMAIL</th>
                        <th>MOBILE</th>
                        <th>ORGANISATION</th>
                        <th>ROLE / DESIGNATION</th>
                        <th>NATURE OF BUSINESS</th>
                        <th>ORGANISATION TYPE</th>
                        <th>ADDRESS</th>
                        <th>POSTCODE</th>
                        <th>CITY</th>
                        <th>STATE</th>
                        <th>COUNTRY</th>
                        <th>PARTICIPANT TYPE</th>
                        <th>INTERESTED IN</th>
                        <th>HOW HEARD</th>
                        <th>REFERRAL / SOURCE</th>
                        <th>CONSENT</th>
                        <th>REGISTERED AT</th>

                    </tr>

                </thead>


                <tbody>

                @forelse ($registrations as $row)

                        <tr>

                            <!-- ID -->

                            <td class="id">
                                {{ $row->id ?: '-' }}
                            </td>


                            <!-- TITLE -->

                            <td>
                                {{ $row->title ?: '-' }}
                            </td>


                            <!-- FIRST NAME -->

                            <td class="name">
                                {{ $row->first_name ?: '-' }}
                            </td>


                            <!-- LAST NAME -->

                            <td class="name">
                                {{ $row->last_name ?: '-' }}
                            </td>


                            <!-- EMAIL -->

                            <td class="email">
                                {{ $row->email ?: '-' }}
                            </td>


                            <!-- MOBILE -->

                            <td class="mobile">
                                {{ $row->mobile ?: '-' }}
                            </td>


                            <!-- ORGANISATION -->

                            <td>
                                {{ $row->organisation ?: '-' }}
                            </td>


                            <!-- ROLE -->

                            <td>
                                {{ $row->role ?: '-' }}
                            </td>


                            <!-- BUSINESS -->

                            <td>
                                {{ $row->business_nature ?: '-' }}
                            </td>


                            <!-- ORGANISATION TYPE -->

                            <td>
                                {{ $row->organisation_type ?: '-' }}
                            </td>


                            <!-- ADDRESS -->

                            <td>
                                {{ $row->address ?: '-' }}
                            </td>


                            <!-- POSTCODE -->

                            <td>
                                {{ $row->postcode ?: '-' }}
                            </td>


                            <!-- CITY -->

                            <td>
                                {{ $row->city ?: '-' }}
                            </td>


                            <!-- STATE -->

                            <td>
                                {{ $row->state ?: '-' }}
                            </td>


                            <!-- COUNTRY -->

                            <td>
                                {{ $row->country ?: '-' }}
                            </td>


                            <!-- PARTICIPANT TYPE -->

                            <td>

                                <span class="type">

                                    {{ $row->participant_type ?: '-' }}

                                </span>

                            </td>


                            <!-- INTEREST -->

                            <td class="interest">

                                {{ $row->interest ?: '-' }}

                            </td>


                            <!-- HOW HEARD -->

                            <td>

                                {{ $row->hear_about ?: '-' }}

                            </td>


                            <!-- REFERRAL -->

                            <td>

                                {{ $row->referral_source ?: '-' }}

                            </td>


                            <!-- CONSENT -->

                            <td>

                                @if ($row->consent)

                                    <span class="consent-yes">
                                        ✓ YES
                                    </span>

                                @else

                                    <span class="consent-no">
                                        NO
                                    </span>

                                @endif

                            </td>


                            <!-- REGISTERED AT -->

                            <td class="date">

                                {{ $row->registered_at ? $row->registered_at->format('d M Y, H:i') : ($row->created_at ? $row->created_at->format('d M Y, H:i') : '-') }}

                            </td>

                        </tr>

                    @empty

                    <tr>

                        <td
                            colspan="21"
                            class="empty"
                        >
                            No registrations found.
                        </td>

                    </tr>

                @endif

                </tbody>

            </table>

        </div>

    </main>

</div>

</body>

</html>