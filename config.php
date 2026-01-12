<?php
/* Database Configuration */

$DB_HOST = "localhost";
$DB_USER = "lampuser";
$DB_PASS = "password123";
$DB_NAME = "lampdb";

/* Create Connection */
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

/* Check Connection */
if ($conn->connect_error) {
    error_log("Database Connection Failed: " . $conn->connect_error);
    die("Service temporarily unavailable. Please try again later.");
}
?>
