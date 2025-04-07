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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>

<form action="add_employee.php" method="POST">
    <label>Last Name:</label><input type="text" name="last_name" required>
    <label>First Name:</label><input type="text" name="first_name" required>
    <label>Middle Name:</label><input type="text" name="middle_name">
    <label>Date of Birth:</label><input type="date" name="date_of_birth" required>
    <label>Home Address:</label><input type="text" name="home_address">
    <label>Contact Number:</label><input type="text" name="contact_number">
    <label>Email Address:</label><input type="email" name="email_address" required>
    <label>Department:</label><input type="text" name="department">
    <label>Position:</label><input type="text" name="position">
    <label>Status:</label>
    <select name="status">
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
    </select>
    <label>Date Hired:</label><input type="date" name="date_hired" required>
    <button type="submit">Add Employee</button>
</form>

</body>
</html>
