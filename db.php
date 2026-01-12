<?php
$conn = new mysqli("localhost", "lampuser", "password123", "lampdb");

if ($conn->connect_error) {
    die("Connection failed");
}
echo "Database Connected Successfully";
?>
