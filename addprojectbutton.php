<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "sphatik_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project_name = $_POST['project_name'];
    $completion_date = $_POST['completion_date'];
    $description = $_POST['description'];

    $sql = "INSERT INTO completed_projects (project_name, completion_date, description) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $project_name, $completion_date, $description);

    if ($stmt->execute()) {
        echo "<p class='success-message'>Project added successfully!</p>";
    } else {
        echo "<p class='error-message'>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Completed Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .form-container {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .success-message {
            color: green;
            font-weight: bold;
        }
        .error-message {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Add a Completed Project</h2>
        <form method="POST" action="">
            <label>Project Name:</label>
            <input type="text" name="project_name" required>

            <label>Completion Date:</label>
            <input type="date" name="completion_date" required>

            <label>Project Description:</label>
            <textarea name="description" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
