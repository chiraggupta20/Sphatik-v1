<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $projectName = $_POST['project_name'];
    $completionDate = $_POST['completion_date'];

    // Example: Save project to a database (Modify as per your database connection)
    // For now, just simulating adding to an array
    $completedProjects = [
        ["name" => "E-commerce Platform", "date" => "2024-12-20"],
        ["name" => "Portfolio Website", "date" => "2024-11-15"]
    ];

    $newProject = ["name" => $projectName, "date" => $completionDate];
    array_push($completedProjects, $newProject);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Completed Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
        }
        .form-container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Add a Completed Project</h2>
        <form method="post" action="">
            <label for="project_name">Project Name:</label>
            <input type="text" id="project_name" name="project_name" required>
            
            <label for="completion_date">Completion Date:</label>
            <input type="date" id="completion_date" name="completion_date" required>
            
            <button type="submit" class="submit-btn">Submit Project</button>
        </form>
    </div>

    <h2>Completed Projects</h2>
    <table>
        <tr>
            <th>Project Name</th>
            <th>Completed On</th>
        </tr>
        <?php if (!empty($completedProjects)): ?>
            <?php foreach ($completedProjects as $project): ?>
                <tr>
                    <td><?php echo $project['name']; ?></td>
                    <td><?php echo $project['date']; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>
</html>
