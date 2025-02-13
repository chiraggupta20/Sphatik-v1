DBMS course PHP and CSS both:

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBMS Course</title>
    <link rel="stylesheet" href="../css/dbms_styles.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include '../includes/header.php'; ?>
   

    <!-- Course Content -->
    <div class="course-container">
        <h2 class="course-title">Database Management System (DBMS)</h2>

        <?php
            $topics = [
                ["title" => "Introduction to DBMS", "desc" => "Overview of database systems, advantages over file systems."],
                ["title" => "Data Models", "desc" => "Hierarchical, Network, Relational, and Object-Oriented Data Models."],
                ["title" => "Normalization", "desc" => "1NF, 2NF, 3NF, BCNF, and their importance in database design."],
                ["title" => "SQL Basics", "desc" => "SQL syntax, DDL, DML, DCL, and TCL commands."],
                ["title" => "Entity-Relationship Model", "desc" => "Entities, attributes, relationships, and ER diagrams."],
                ["title" => "Transactions & Concurrency", "desc" => "ACID properties, locking mechanisms, deadlocks."],
                ["title" => "Indexing & Hashing", "desc" => "B-Trees, B+ Trees, Hash Indexing, and performance tuning."]
            ];

            foreach ($topics as $topic) {
                echo "<div class='topic'>";
                echo "<h3>" . $topic["title"] . "</h3>";
                echo "<p>" . $topic["desc"] . "</p>";
                echo "</div>";
            }
        ?>
    </div>

</body>
</html>