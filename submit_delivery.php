<?php
// Database Connection
$servername = "localhost";
$name = "root";
$password = "";
$database = "sphatik_db"; // Change this to your actual database name

$conn = new mysqli($servername, $name, $password, $database);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $conn->real_escape_string($_POST["full_name"]);
    $phone_number = $conn->real_escape_string($_POST["phone_number"]);
    $vehicle_type = $conn->real_escape_string($_POST["vehicle_type"]);

    // Insert Query
    $sql = "INSERT INTO delivery_partners (full_name, phone_number, vehicle_type) 
            VALUES ('$full_name', '$phone_number', '$vehicle_type')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Registration successful!</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}

$conn->close();
?>
