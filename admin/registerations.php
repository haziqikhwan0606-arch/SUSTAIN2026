<?php

$pageTitle = 'Registrations — SUSTAIN 2026';

require_once '../includes/db.php';


/* =====================================================
   SEARCH
===================================================== */

$search = trim($_GET['search'] ?? '');

if ($search !== '') {

    $stmt = $conn->prepare("
        SELECT *
        FROM registrations
        WHERE
            first_name LIKE ?
            OR last_name LIKE ?
            OR email LIKE ?
            OR organisation LIKE ?
        ORDER BY registered_at DESC
    ");

    $keyword = '%' . $search . '%';

    $stmt->bind_param(
        "ssss",
        $keyword,
        $keyword,
        $keyword,
        $keyword
    );

    $stmt->execute();

    $result = $stmt->get_result();

} else {

    $result = $conn->query("
        SELECT *
        FROM registrations
        ORDER BY registered_at DESC
    ");

}


/* =====================================================
   STATISTICS
===================================================== */

$totalResult = $conn->query("
    SELECT COUNT(*) AS total
    FROM registrations
");

$total = $totalResult->fetch_assoc()['total'];


$governmentResult = $conn->query("
    SELECT COUNT(*) AS total
    FROM registrations
    WHERE participant_type = 'government'
");

$government = $governmentResult->fetch_assoc()['total'];


$corporateResult = $conn->query("
    SELECT COUNT(*) AS total
    FROM registrations
    WHERE participant_type = 'corporate'
");

$corporate = $corporateResult->fetch_assoc()['total'];


$studentResult = $conn->query("
    SELECT COUNT(*) AS total
    FROM registrations
    WHERE participant_type = 'student'
");

$student = $studentResult->fetch_assoc()['total'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= htmlspecialchars($pageTitle) ?></title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
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
            padding: 28px 5vw;

            display: flex;
            justify-content: space-between;
            align-items: center;

            border-bottom: 4px solid #c8ff00;
        }

        .admin-brand {
            font-size: 24px;
            font-weight: 800;
            letter-spacing: -0.04em;
        }

        .admin-brand span {
            color: #c8ff00;
        }

        .admin-label {
            font-size: 12px;
            letter-spacing: .15em;
            opacity: .6;
        }


        /* =================================================
           MAIN
        ================================================= */

        .admin-main {
            width: min(1400px, 90%);
            margin: 0 auto;
            padding: 60px 0;
        }

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
            font-size: clamp(3rem, 7vw, 6rem);
            line-height: .85;
            letter-spacing: -.06em;
        }

        .admin-heading h1 span {
            color: #777;
        }


        /* =================================================
           STATS
        ================================================= */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2px;
            margin-bottom: 40px;
        }

        .stat {
            background: white;
            border: 1px solid #ddd;
            padding: 28px;
        }

        .stat-label {
            display: block;
            font-size: 11px;
            letter-spacing: .12em;
            margin-bottom: 20px;
            opacity: .55;
        }

        .stat-number {
            font-size: 48px;
            font-weight: 800;
            letter-spacing: -.05em;
        }


        /* =================================================
           SEARCH
        ================================================= */

        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .search-form {
            display: flex;
            width: 100%;
            max-width: 500px;
        }

        .search-form input {
            flex: 1;
            padding: 16px;
            border: 1px solid #bbb;
            background: white;
            font-size: 14px;
        }

        .search-form button {
            padding: 16px 24px;
            border: none;
            background: #111;
            color: white;
            font-weight: 700;
            cursor: pointer;
        }

        .search-form button:hover {
            background: #333;
        }


        /* =================================================
           TABLE
        ================================================= */

        .table-wrapper {
            background: white;
            border: 1px solid #ddd;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 950px;
        }

        th {
            background: #111;
            color: white;
            text-align: left;
            padding: 16px;
            font-size: 11px;
            letter-spacing: .08em;
            white-space: nowrap;
        }

        td {
            padding: 18px 16px;
            border-bottom: 1px solid #e5e5e5;
            font-size: 14px;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: #f8f8f5;
        }

        .name {
            font-weight: 700;
        }

        .type {
            display: inline-block;
            padding: 6px 9px;
            background: #eee;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
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

        @media (max-width: 800px) {

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .toolbar {
                display: block;
            }

            .search-form {
                max-width: none;
            }

        }

    </style>

</head>


<body>

<div class="admin">


    <!-- HEADER -->

    <header class="admin-header">

        <div class="admin-brand">
            SUSTAIN <span>2026</span>
        </div>

        <div class="admin-label">
            ADMIN / REGISTRATIONS
        </div>

    </header>


    <!-- MAIN -->

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


        <!-- STATS -->

        <section class="stats">

            <div class="stat">

                <span class="stat-label">
                    TOTAL REGISTRATIONS
                </span>

                <div class="stat-number">
                    <?= $total ?>
                </div>

            </div>


            <div class="stat">

                <span class="stat-label">
                    GOVERNMENT
                </span>

                <div class="stat-number">
                    <?= $government ?>
                </div>

            </div>


            <div class="stat">

                <span class="stat-label">
                    CORPORATE
                </span>

                <div class="stat-number">
                    <?= $corporate ?>
                </div>

            </div>


            <div class="stat">

                <span class="stat-label">
                    STUDENT
                </span>

                <div class="stat-number">
                    <?= $student ?>
                </div>

            </div>

        </section>


        <!-- SEARCH -->

        <div class="toolbar">

            <form
                class="search-form"
                method="get"
            >

                <input
                    type="text"
                    name="search"
                    placeholder="Search name, email or organisation..."
                    value="<?= htmlspecialchars($search) ?>"
                >

                <button type="submit">
                    SEARCH
                </button>

            </form>

        </div>


        <!-- TABLE -->

        <div class="table-wrapper">

            <table>

                <thead>

                    <tr>

                        <th>#</th>

                        <th>NAME</th>

                        <th>EMAIL</th>

                        <th>ORGANISATION</th>

                        <th>ROLE</th>

                        <th>TYPE</th>

                        <th>INTEREST</th>

                        <th>REGISTERED</th>

                    </tr>

                </thead>


                <tbody>

                <?php if ($result->num_rows > 0): ?>

                    <?php $number = 1; ?>

                    <?php while ($row = $result->fetch_assoc()): ?>

                        <tr>

                            <td>
                                <?= $number++ ?>
                            </td>

                            <td class="name">

                                <?= htmlspecialchars(
                                    $row['first_name'] . ' ' . $row['last_name']
                                ) ?>

                            </td>

                            <td>

                                <?= htmlspecialchars(
                                    $row['email']
                                ) ?>

                            </td>

                            <td>

                                <?= htmlspecialchars(
                                    $row['organisation'] ?: '-'
                                ) ?>

                            </td>

                            <td>

                                <?= htmlspecialchars(
                                    $row['role'] ?: '-'
                                ) ?>

                            </td>

                            <td>

                                <span class="type">

                                    <?= htmlspecialchars(
                                        $row['participant_type']
                                    ) ?>

                                </span>

                            </td>

                            <td>

                                <?= htmlspecialchars(
                                    $row['interest'] ?: '-'
                                ) ?>

                            </td>

                            <td class="date">

                                <?= date(
                                    'd M Y, H:i',
                                    strtotime($row['registered_at'])
                                ) ?>

                            </td>

                        </tr>

                    <?php endwhile; ?>

                <?php else: ?>

                    <tr>

                        <td
                            colspan="8"
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

</html>