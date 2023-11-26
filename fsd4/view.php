<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "student_registration";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Roll No/ID</th><th>Contact Number</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["roll_no"]."</td><td>".$row["contact_number"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>
