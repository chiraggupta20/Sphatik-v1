<?php
include '../config/database.php';

// Fetch courses from database
$sql = "SELECT img_src, title, description, enroll_link, college_name FROM courses";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$courses = $stmt->fetchAll();

// Function to generate course card markup
function generateCourseCard($img, $title, $desc, $link, $college) {
    return "<div class='course-card'>
                <img src='$img' alt='$title'>
                <h3>$title</h3>
                <p>$desc</p>
                <p class='college-name'><strong>Offered by:</strong> $college</p>
                <a href='$link' class='btn'>Enroll Now</a>
            </div>";
}

?>

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
    <?php include '../includes/header.php'; ?>

    <main class="courses-page">
        <div class="container">
            <h1>Our Courses</h1>
            <div class="courses-grid">
            <?php
            if ($courses) {
                foreach ($courses as $course) {
                    echo generateCourseCard($course['img_src'], $course['title'], $course['description'], $course['enroll_link'], $course['college_name']);
                }
            } else {
                echo "<p>No courses available.</p>";
            }
            ?>
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>
