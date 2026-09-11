<?php

$pageTitle = 'Register — SUSTAIN 2026';
$basePath  = '../';

require_once '../includes/db.php';

require_once '../PHPMailer/src/Exception.php';
require_once '../PHPMailer/src/PHPMailer.php';
require_once '../PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$success = false;
$error = '';

/* =====================================================
   HANDLE REGISTRATION
===================================================== */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $first_name       = trim($_POST['first_name'] ?? '');
    $last_name        = trim($_POST['last_name'] ?? '');
    $email            = trim($_POST['email'] ?? '');
    $organisation     = trim($_POST['organisation'] ?? '');
    $role             = trim($_POST['role'] ?? '');
    $participant_type = trim($_POST['participant_type'] ?? '');
    $interest         = trim($_POST['interest'] ?? '');
    $consent          = isset($_POST['consent']) ? 1 : 0;


    /* VALIDATION */

    if (
        empty($first_name) ||
        empty($last_name) ||
        empty($email) ||
        empty($participant_type) ||
        !$consent
    ) {

        $error = 'Please complete all required fields.';

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error = 'Please enter a valid email address.';

    } else {

        /* INSERT INTO DATABASE */

        $stmt = $conn->prepare("
            INSERT INTO registrations (
                first_name,
                last_name,
                email,
                organisation,
                role,
                participant_type,
                interest,
                consent
            )
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)
        ");

        $stmt->bind_param(
            "sssssssi",
            $first_name,
            $last_name,
            $email,
            $organisation,
            $role,
            $participant_type,
            $interest,
            $consent
        );


       if ($stmt->execute()) {

    // SEND CONFIRMATION EMAIL
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();

        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'haziqikhwan0606@gmail.com';

        // MASUKKAN APP PASSWORD KAU DALAM QUOTES
        $mail->Password   = 'suqs cmju rmyl ziwl';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // SENDER
        $mail->setFrom(
            'haziqikhwan0606@gmail.com',
            'SUSTAIN 2026'
        );

        // RECIPIENT
        $mail->addAddress(
            $email,
            $first_name . ' ' . $last_name
        );

        
$mail->isHTML(true);

$mail->Subject = 'SUSTAIN 2026 — Registration Confirmation';

$mail->Body = '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUSTAIN 2026 — Registration Confirmation</title>
</head>

<body style="
    margin: 0;
    padding: 0;
    background-color: #f2f3ef;
    font-family: Arial, Helvetica, sans-serif;
    color: #111111;
">

<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f2f3ef;">
<tr>
<td align="center" style="padding: 40px 15px;">

    <!-- EMAIL CONTAINER -->
    <table
        width="100%"
        cellpadding="0"
        cellspacing="0"
        border="0"
        style="
            max-width: 620px;
            background-color: #ffffff;
            border: 1px solid #e2e2dd;
        "
    >

        <!-- HEADER -->
        <tr>
            <td style="
                background-color: #111111;
                padding: 35px 40px;
                border-bottom: 5px solid #c8ff00;
            ">

                <p style="
                    margin: 25px 0 0 0;
                    color:#ffffff;
                    font-size:11px;
                    letter-spacing:2px;
                    opacity:.65;
                ">
                    MALAYSIA SUSTAINABILITY & ESG CONFERENCE
                </p>

            </td>
        </tr>


        <!-- CONTENT -->
        <tr>
            <td style="padding: 45px 40px 40px 40px;">

                <!-- CONFIRMED LABEL -->
                <p style="
                    margin:0 0 15px 0;
                    font-size:11px;
                    font-weight:bold;
                    letter-spacing:2px;
                    color:#6f7b00;
                ">
                    ✓ REGISTRATION CONFIRMED
                </p>

                <h1 style="
                    margin:0;
                    font-size:38px;
                    line-height:1.05;
                    letter-spacing:-1.5px;
                    color:#111111;
                ">
                    You&rsquo;re<br>
                    <span style="color:#6f7b00;">registered.</span>
                </h1>

                <p style="
                    margin:25px 0 0 0;
                    font-size:15px;
                    line-height:1.7;
                    color:#555555;
                ">
                    Hi <strong>' . htmlspecialchars($first_name) . '</strong>,
                </p>

                <p style="
                    margin:15px 0 0 0;
                    font-size:15px;
                    line-height:1.7;
                    color:#555555;
                ">
                    Thank you for registering for
                    <strong style="color:#111111;">SUSTAIN 2026</strong>.
                    Your registration has been successfully received.
                </p>


                <!-- EVENT DETAILS -->
                <table
                    width="100%"
                    cellpadding="0"
                    cellspacing="0"
                    border="0"
                    style="
                        margin-top:35px;
                        background-color:#f5f6f1;
                        border-left:4px solid #c8ff00;
                    "
                >
                    <tr>
                        <td style="padding:25px;">

                            <p style="
                                margin:0 0 8px 0;
                                font-size:10px;
                                font-weight:bold;
                                letter-spacing:1.5px;
                                color:#777777;
                            ">
                                EVENT DATE
                            </p>

                            <p style="
                                margin:0;
                                font-size:19px;
                                font-weight:bold;
                                color:#111111;
                            ">
                                10 November 2026
                            </p>

                            <p style="
                                margin:22px 0 8px 0;
                                font-size:10px;
                                font-weight:bold;
                                letter-spacing:1.5px;
                                color:#777777;
                            ">
                                VENUE
                            </p>

                            <p style="
                                margin:0;
                                font-size:16px;
                                font-weight:bold;
                                color:#111111;
                            ">
                                Bangi Avenue Convention Centre
                            </p>

                        </td>
                    </tr>
                </table>


                <!-- DIVIDER -->
                <div style="
                    height:1px;
                    background:#e5e5e0;
                    margin:35px 0;
                "></div>


                <!-- MESSAGE -->
                <p style="
                    margin:0;
                    font-size:14px;
                    line-height:1.7;
                    color:#555555;
                ">
                    We look forward to welcoming you to a day of
                    meaningful conversations, ideas and action towards
                    a more sustainable future.
                </p>

                <p style="
                    margin:25px 0 0 0;
                    font-size:14px;
                    line-height:1.7;
                    color:#555555;
                ">
                    Please keep this email for your records.
                    Further event information will be shared with you
                    closer to the conference date.
                </p>


                <!-- SIGN OFF -->
                <p style="
                    margin:35px 0 0 0;
                    font-size:14px;
                    line-height:1.6;
                    color:#111111;
                ">
                    See you at <strong>SUSTAIN 2026.</strong>
                </p>

            </td>
        </tr>


        <!-- FOOTER -->
        <tr>
            <td style="
                background-color:#111111;
                padding:30px 40px;
            ">

                <p style="
                    margin:0;
                    color:#ffffff;
                    font-size:14px;
                    font-weight:bold;
                ">
                    SUSTAIN <span style="color:#c8ff00;">2026</span>
                </p>

                <p style="
                    margin:10px 0 0 0;
                    color:#888888;
                    font-size:11px;
                    line-height:1.6;
                ">
                    Malaysia Sustainability & ESG Conference
                </p>

                <p style="
                    margin:20px 0 0 0;
                    color:#666666;
                    font-size:10px;
                    line-height:1.5;
                ">
                    This is an automated registration confirmation.
                    Please do not reply to this email.
                </p>

            </td>
        </tr>

    </table>

</td>
</tr>
</table>

</body>
</html>
';


$mail->AltBody =
    "SUSTAIN 2026 — REGISTRATION CONFIRMED\n\n" .
    "Hi $first_name,\n\n" .
    "Thank you for registering for SUSTAIN 2026. " .
    "Your registration has been successfully received.\n\n" .
    "EVENT DATE\n" .
    "10 November 2026\n\n" .
    "VENUE\n" .
    "Bangi Avenue Convention Centre\n\n" .
    "We look forward to welcoming you to SUSTAIN 2026.\n\n" .
    "Further event information will be shared with you closer to the conference date.\n\n" .
    "SUSTAIN 2026\n" .
    "Malaysia Sustainability & ESG Conference";


$mail->send();

$success = true;

    } catch (Exception $e) {

        // Registration is saved even if email fails
        $success = true;

        $error = 'Registration saved, but confirmation email could not be sent.';

    }

} else {

    $error = 'Something went wrong. Please try again.';

}

        $stmt->close();
    }
}

require_once '../includes/header.php';
?>


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

                        <?php if ($success): ?>

                            <div class="register-message register-message--success">

                                REGISTRATION SUCCESSFUL.

                            </div>

                        <?php endif; ?>


                        <!-- ERROR MESSAGE -->

                        <?php if ($error): ?>

                            <div class="register-message register-message--error">

                                <?= htmlspecialchars($error) ?>

                            </div>

                        <?php endif; ?>

                    </div>


                    <!-- =================================================
                         FORM
                    ================================================== -->

                    <?php if (!$success): ?>

                    <form
                        class="register-form"
                        action=""
                        method="post"
                    >


                        <!-- FIRST + LAST NAME -->

                        <div class="form-row">


                            <div class="form-field">

                                <label for="first_name">
                                    FIRST NAME
                                </label>

                                <input
                                    type="text"
                                    id="first_name"
                                    name="first_name"
                                    value="<?= htmlspecialchars($_POST['first_name'] ?? '') ?>"
                                    required
                                >

                            </div>


                            <div class="form-field">

                                <label for="last_name">
                                    LAST NAME
                                </label>

                                <input
                                    type="text"
                                    id="last_name"
                                    name="last_name"
                                    value="<?= htmlspecialchars($_POST['last_name'] ?? '') ?>"
                                    required
                                >

                            </div>

                        </div>


                        <!-- EMAIL -->

                        <div class="form-field">

                            <label for="email">
                                EMAIL ADDRESS
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                                required
                            >

                        </div>


                        <!-- ORGANISATION -->

                        <div class="form-field">

                            <label for="organisation">
                                ORGANISATION / INSTITUTION
                            </label>

                            <input
                                type="text"
                                id="organisation"
                                name="organisation"
                                value="<?= htmlspecialchars($_POST['organisation'] ?? '') ?>"
                            >

                        </div>


                        <!-- ROLE + PARTICIPANT TYPE -->

                        <div class="form-row">


                            <div class="form-field">

                                <label for="role">
                                    ROLE / POSITION
                                </label>

                                <input
                                    type="text"
                                    id="role"
                                    name="role"
                                    value="<?= htmlspecialchars($_POST['role'] ?? '') ?>"
                                >

                            </div>


                            <div class="form-field">

                                <label for="participant_type">
                                    PARTICIPANT TYPE
                                </label>

                                <select
                                    id="participant_type"
                                    name="participant_type"
                                    required
                                >

                                    <option
                                        value=""
                                        disabled
                                        <?= empty($_POST['participant_type']) ? 'selected' : '' ?>
                                    >
                                        Select
                                    </option>

                                    <option
                                        value="government"
                                        <?= ($_POST['participant_type'] ?? '') === 'government' ? 'selected' : '' ?>
                                    >
                                        Government
                                    </option>

                                    <option
                                        value="corporate"
                                        <?= ($_POST['participant_type'] ?? '') === 'corporate' ? 'selected' : '' ?>
                                    >
                                        Corporate / Industry
                                    </option>

                                    <option
                                        value="sme"
                                        <?= ($_POST['participant_type'] ?? '') === 'sme' ? 'selected' : '' ?>
                                    >
                                        SME
                                    </option>

                                    <option
                                        value="finance"
                                        <?= ($_POST['participant_type'] ?? '') === 'finance' ? 'selected' : '' ?>
                                    >
                                        Financial Institution
                                    </option>

                                    <option
                                        value="professional"
                                        <?= ($_POST['participant_type'] ?? '') === 'professional' ? 'selected' : '' ?>
                                    >
                                        Sustainability Professional
                                    </option>

                                    <option
                                        value="academic"
                                        <?= ($_POST['participant_type'] ?? '') === 'academic' ? 'selected' : '' ?>
                                    >
                                        Academic / Researcher
                                    </option>

                                    <option
                                        value="student"
                                        <?= ($_POST['participant_type'] ?? '') === 'student' ? 'selected' : '' ?>
                                    >
                                        Student / Young Professional
                                    </option>

                                    <option
                                        value="international"
                                        <?= ($_POST['participant_type'] ?? '') === 'international' ? 'selected' : '' ?>
                                    >
                                        International Stakeholder
                                    </option>

                                </select>

                            </div>

                        </div>


                        <!-- AREA OF INTEREST -->

                        <div class="form-field">

                            <label for="interest">
                                AREA OF INTEREST
                            </label>

                            <select
                                id="interest"
                                name="interest"
                            >

                                <option
                                    value=""
                                    <?= empty($_POST['interest']) ? 'selected' : '' ?>
                                >
                                    Select an area
                                </option>

                                <option
                                    value="conference"
                                    <?= ($_POST['interest'] ?? '') === 'conference' ? 'selected' : '' ?>
                                >
                                    Main Conference
                                </option>

                                <option
                                    value="symposium"
                                    <?= ($_POST['interest'] ?? '') === 'symposium' ? 'selected' : '' ?>
                                >
                                    Academic Symposium
                                </option>

                                <option
                                    value="awards"
                                    <?= ($_POST['interest'] ?? '') === 'awards' ? 'selected' : '' ?>
                                >
                                    Impact Awards
                                </option>

                                <option
                                    value="exhibition"
                                    <?= ($_POST['interest'] ?? '') === 'exhibition' ? 'selected' : '' ?>
                                >
                                    Industry Exhibition & Networking
                                </option>

                            </select>

                        </div>


                        <!-- CONSENT -->

                        <label class="checkbox-field">

                            <input
                                type="checkbox"
                                name="consent"
                                required
                                <?= isset($_POST['consent']) ? 'checked' : '' ?>
                            >

                            <span>
                                I agree to be contacted regarding
                                SUSTAIN 2026.
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

                    <?php endif; ?>


                </div>

            </div>

        </div>

    </section>

</main>


<?php require_once '../includes/footer.php'; ?>