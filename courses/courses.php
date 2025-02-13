<!-- filepath: /c:/xampp/htdocs/Sphatik v1/courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - Sphatik</title>
    <link rel="stylesheet" href="../css/course_styles.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include '../includes/header.php'; 
    include '../config/database.php';
    include '../includes/functions.php';
    ?>


    <main class="courses-page">
        <div class="container">
            <h1>Our Courses</h1>
            <div class="courses-grid">
                <?php
                $sql = "SELECT img_src, title, description, enroll_link, college_name FROM courses";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $courses = $stmt->fetchAll();

                if ($courses) {
                    foreach ($courses as $course) {
                        echo generateCourseCard($course['img_src'], $course['title'], $course['description'], $course['enroll_link'], $course['college_name']);
                    }
                } else {
                    echo "<p>No courses available.</p>";
                }
        ?>
                <!-- Add more course cards as needed -->
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>