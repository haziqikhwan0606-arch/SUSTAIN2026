<?php

require_once '../includes/admin_auth.php';

$pageTitle = 'Registrations — SUSTAIN 2026';

require_once '../includes/db.php';

/* =====================================================
   FILTER VALUES
===================================================== */

$search = trim($_GET['search'] ?? '');
$participant_type = trim($_GET['participant_type'] ?? '');
$interest = trim($_GET['interest'] ?? '');

/* =====================================================
   BUILD DATABASE QUERY
===================================================== */

$sql = "
    SELECT *
    FROM registrations
    WHERE 1=1
";

$params = [];
$types = "";

/* SEARCH */

if ($search !== '') {

    $sql .= "
        AND (
            first_name LIKE ?
            OR last_name LIKE ?
            OR email LIKE ?
            OR organisation LIKE ?
            OR mobile LIKE ?
            OR role LIKE ?
            OR business_nature LIKE ?
            OR city LIKE ?
            OR state LIKE ?
            OR country LIKE ?
        )
    ";

    $keyword = '%' . $search . '%';

    for ($i = 0; $i < 10; $i++) {
        $params[] = $keyword;
    }

    $types .= "ssssssssss";
}

/* PARTICIPANT TYPE */

if ($participant_type !== '') {

    $sql .= "
        AND participant_type = ?
    ";

    $params[] = $participant_type;
    $types .= "s";
}

/* INTEREST */

if ($interest !== '') {

    $sql .= "
        AND interest = ?
    ";

    $params[] = $interest;
    $types .= "s";
}

/* SORT */

$sql .= "
    ORDER BY registered_at DESC
";

/* =====================================================
   EXECUTE QUERY
===================================================== */

$stmt = $conn->prepare($sql);

if (!empty($params)) {
    $stmt->bind_param(
        $types,
        ...$params
    );
}

$stmt->execute();

$result = $stmt->get_result();

/* =====================================================
   TOTAL REGISTRATIONS
===================================================== */

$totalResult = $conn->query("
    SELECT COUNT(*) AS total
    FROM registrations
");

$total = $totalResult->fetch_assoc()['total'];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?= htmlspecialchars($pageTitle) ?>
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
                href="logout.php"
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
                    <?= $total ?>
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
                    value="<?= htmlspecialchars($search) ?>"
                >


                <!-- PARTICIPANT TYPE -->

                <select name="participant_type">

                    <option value="">
                        All participant types
                    </option>

                    <option
                        value="government"
                        <?= $participant_type === 'government' ? 'selected' : '' ?>
                    >
                        Government
                    </option>

                    <option
                        value="corporate"
                        <?= $participant_type === 'corporate' ? 'selected' : '' ?>
                    >
                        Corporate / Industry
                    </option>

                    <option
                        value="sme"
                        <?= $participant_type === 'sme' ? 'selected' : '' ?>
                    >
                        SME
                    </option>

                    <option
                        value="finance"
                        <?= $participant_type === 'finance' ? 'selected' : '' ?>
                    >
                        Financial Institution
                    </option>

                    <option
                        value="professional"
                        <?= $participant_type === 'professional' ? 'selected' : '' ?>
                    >
                        Sustainability Professional
                    </option>

                    <option
                        value="academic"
                        <?= $participant_type === 'academic' ? 'selected' : '' ?>
                    >
                        Academic / Researcher
                    </option>

                    <option
                        value="student"
                        <?= $participant_type === 'student' ? 'selected' : '' ?>
                    >
                        Student / Young Professional
                    </option>

                    <option
                        value="international"
                        <?= $participant_type === 'international' ? 'selected' : '' ?>
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
                        <?= $interest === 'conference' ? 'selected' : '' ?>
                    >
                        Main Conference
                    </option>

                    <option
                        value="symposium"
                        <?= $interest === 'symposium' ? 'selected' : '' ?>
                    >
                        Academic Symposium
                    </option>

                    <option
                        value="awards"
                        <?= $interest === 'awards' ? 'selected' : '' ?>
                    >
                        Impact Awards
                    </option>

                    <option
                        value="exhibition"
                        <?= $interest === 'exhibition' ? 'selected' : '' ?>
                    >
                        Industry Exhibition & Networking
                    </option>

                </select>


                <!-- FILTER -->

                <button type="submit">
                    FILTER
                </button>


                <!-- CLEAR -->

                <?php if (
                    $search !== '' ||
                    $participant_type !== '' ||
                    $interest !== ''
                ): ?>

                    <a href="registrations.php">
                        CLEAR
                    </a>

                <?php endif; ?>

            </form>

        </div>


        <!-- =================================================
             RESULTS INFO
        ================================================== -->

        <div class="results-info">

            <div>

                Showing

                <strong>
                    <?= $result->num_rows ?>
                </strong>

                registration(s)

            </div>

            <?php if (
                $search ||
                $participant_type ||
                $interest
            ): ?>

                <div>
                    Filters applied
                </div>

            <?php endif; ?>

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

                <?php if ($result->num_rows > 0): ?>

                    <?php while (
                        $row = $result->fetch_assoc()
                    ): ?>

                        <tr>

                            <!-- ID -->

                            <td class="id">
                                <?= htmlspecialchars($row['id']) ?>
                            </td>


                            <!-- TITLE -->

                            <td>
                                <?= htmlspecialchars(
                                    $row['title'] ?: '-'
                                ) ?>
                            </td>


                            <!-- FIRST NAME -->

                            <td class="name">
                                <?= htmlspecialchars(
                                    $row['first_name']
                                ) ?>
                            </td>


                            <!-- LAST NAME -->

                            <td class="name">
                                <?= htmlspecialchars(
                                    $row['last_name']
                                ) ?>
                            </td>


                            <!-- EMAIL -->

                            <td class="email">
                                <?= htmlspecialchars(
                                    $row['email']
                                ) ?>
                            </td>


                            <!-- MOBILE -->

                            <td class="mobile">
                                <?= htmlspecialchars(
                                    $row['mobile'] ?: '-'
                                ) ?>
                            </td>


                            <!-- ORGANISATION -->

                            <td>
                                <?= htmlspecialchars(
                                    $row['organisation'] ?: '-'
                                ) ?>
                            </td>


                            <!-- ROLE -->

                            <td>
                                <?= htmlspecialchars(
                                    $row['role'] ?: '-'
                                ) ?>
                            </td>


                            <!-- BUSINESS -->

                            <td>
                                <?= htmlspecialchars(
                                    $row['business_nature'] ?: '-'
                                ) ?>
                            </td>


                            <!-- ORGANISATION TYPE -->

                            <td>
                                <?= htmlspecialchars(
                                    $row['organisation_type'] ?: '-'
                                ) ?>
                            </td>


                            <!-- ADDRESS -->

                            <td>
                                <?= htmlspecialchars(
                                    $row['address'] ?: '-'
                                ) ?>
                            </td>


                            <!-- POSTCODE -->

                            <td>
                                <?= htmlspecialchars(
                                    $row['postcode'] ?: '-'
                                ) ?>
                            </td>


                            <!-- CITY -->

                            <td>
                                <?= htmlspecialchars(
                                    $row['city'] ?: '-'
                                ) ?>
                            </td>


                            <!-- STATE -->

                            <td>
                                <?= htmlspecialchars(
                                    $row['state'] ?: '-'
                                ) ?>
                            </td>


                            <!-- COUNTRY -->

                            <td>
                                <?= htmlspecialchars(
                                    $row['country'] ?: '-'
                                ) ?>
                            </td>


                            <!-- PARTICIPANT TYPE -->

                            <td>

                                <span class="type">

                                    <?= htmlspecialchars(
                                        $row['participant_type']
                                    ) ?>

                                </span>

                            </td>


                            <!-- INTEREST -->

                            <td class="interest">

                                <?= htmlspecialchars(
                                    $row['interest'] ?: '-'
                                ) ?>

                            </td>


                            <!-- HOW HEARD -->

                            <td>

                                <?= htmlspecialchars(
                                    $row['hear_about'] ?: '-'
                                ) ?>

                            </td>


                            <!-- REFERRAL -->

                            <td>

                                <?= htmlspecialchars(
                                    $row['referral_source'] ?: '-'
                                ) ?>

                            </td>


                            <!-- CONSENT -->

                            <td>

                                <?php if ($row['consent']): ?>

                                    <span class="consent-yes">
                                        ✓ YES
                                    </span>

                                <?php else: ?>

                                    <span class="consent-no">
                                        NO
                                    </span>

                                <?php endif; ?>

                            </td>


                            <!-- REGISTERED AT -->

                            <td class="date">

                                <?= date(
                                    'd M Y, H:i',
                                    strtotime(
                                        $row['registered_at']
                                    )
                                ) ?>

                            </td>

                        </tr>

                    <?php endwhile; ?>

                <?php else: ?>

                    <tr>

                        <td
                            colspan="21"
                            class="empty"
                        >
                            No registrations found.
                        </td>

                    </tr>

                <?php endif; ?>

                </tbody>

            </table>

        </div>

    </main>

</div>

</body>

</html>grep -n "<th>TITLE</th>" /Applications/XAMPP/xamppfiles/htdocs/SUSTAIN/admin/registrations.php

