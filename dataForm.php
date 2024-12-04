<?php
// Author: Caden Weeks
// Date: 11/17/2024

// Connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dataForm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO user_inquiries (first_name, last_name, email, message) VALUES ('$first_name', '$last_name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
