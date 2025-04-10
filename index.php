<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Add Employee</title>
</head>
<body>

<form action="add_employee.php" method="POST">
    <h2>Add Employee</h2> 

    <label>Last Name:</label>
    <input type="text" name="last_name" required>

    <label>First Name:</label>
    <input type="text" name="first_name" required>

    <label>Middle Name:</label>
    <input type="text" name="middle_name">

    <label>Date of Birth:</label>
    <input type="date" name="date_of_birth" required>

    <label>Home Address:</label>
    <input type="text" name="home_address">

    <label>Contact Number:</label>
    <input type="text" name="contact_number">

    <label>Email Address:</label>
    <input type="email" name="email_address" required>

    <label>Department:</label>
    <input type="text" name="department">

    <label>Position:</label>
    <input type="text" name="position">

    <label>Status:</label>
    <select name="status">
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
    </select>

    <label>Date Hired:</label>
    <input type="date" name="date_hired" required>

    <button type="submit">Add Employee</button>
</form>

</body>
</html>
