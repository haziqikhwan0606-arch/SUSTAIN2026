<?php

session_start();

/* Destroy admin session */
unset($_SESSION['admin_logged_in']);

/* Destroy entire session */
session_destroy();

/* Back to login */
header('Location: login.php');
exit;