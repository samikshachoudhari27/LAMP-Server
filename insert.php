<?php
require "config.php";

$name  = "Samiksha";
$email = "samiksha@example.com";

$stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email);

if ($stmt->execute()) {
    echo "Data inserted successfully";
} else {
    echo "Insert failed";
}

$stmt->close();
$conn->close();
?>
