<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "DB_HRMS"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $last_name = $conn->real_escape_string($_POST['last_name']);
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $middle_name = $conn->real_escape_string($_POST['middle_name']);
    $date_of_birth = $conn->real_escape_string($_POST['date_of_birth']);
    $home_address = $conn->real_escape_string($_POST['home_address']);
    $contact_number = $conn->real_escape_string($_POST['contact_number']);
    $email_address = $conn->real_escape_string($_POST['email_address']);
    $department = $conn->real_escape_string($_POST['department']);
    $position = $conn->real_escape_string($_POST['position']);
    $status = $conn->real_escape_string($_POST['status']);
    $date_hired = $conn->real_escape_string($_POST['date_hired']);

    $query = "INSERT INTO Employee (last_name, first_name, middle_name, date_of_birth, home_address, contact_number, email_address, department, position, status, date_hired)
              VALUES ('$last_name', '$first_name', '$middle_name', '$date_of_birth', '$home_address', '$contact_number', '$email_address', '$department', '$position', '$status', '$date_hired')";

    if ($conn->query($query) === TRUE) {
        echo "New employee added successfully!";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

$conn->close();

?>
