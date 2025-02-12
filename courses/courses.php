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
    <?php include '../includes/header.php'; ?>

    <main class="courses-page">
        <div class="container">
            <h1>Our Courses</h1>
            <div class="courses-grid">
                <div class="course-card">
                    <img src="../includes/images/dcn.jpg" alt="Course 1">
                    <h3>Data communication and Networking</h3>
                    <p>Short description of the course.</p>
                    <a href="dcn.php" class="btn">Enroll Now</a>
                </div>
                <div class="course-card">
                    <img src="../includes/images/dbms.jpg" alt="Course 2">
                    <h3>Database management system</h3>
                    <p>Short description of the course.</p>
                    <a href="mit.php" class="btn">Enroll Now</a>
                </div>
                <div class="course-card">
                    <img src="../includes/images/mit.png" alt="Course 3">
                    <h3>Micoprocessor and Interfacing Techniques</h3>
                    <p>Short description of the course.</p>
                    <a href="course-details.php?id=2" class="btn">Enroll Now</a>
                </div>
                <div class="course-card">
                    <img src="../includes/images/os.jpg" alt="Course 4">
                    <h3>Operating System</h3>
                    <p>Short description of the course.</p>
                    <a href="course-details.php?id=2" class="btn">Enroll Now</a>
                </div>
                <div class="course-card">
                    <img src="../includes/images/python.jpg" alt="Course 2">
                    <h3>Python Programming</h3>
                    <p>Short description of the course.</p>
                    <a href="course-details.php?id=2" class="btn">Enroll Now</a>
                </div>
                <div class="course-card">
                    <img src="../includes/images/ds.jpg" alt="Course 2">
                    <h3>Data Strctures</h3>
                    <p>Short description of the course.</p>
                    <a href="course-details.php?id=2" class="btn">Enroll Now</a>
                </div>
                <div class="course-card">
                    <img src="../includes/images/se.jpg" alt="Course 2">
                    <h3>Software Engineering</h3>
                    <p>Short description of the course.</p>
                    <a href="course-details.php?id=2" class="btn">Enroll Now</a>
                </div>
                <div class="course-card">
                    <img src="../includes/images/wt.jpg" alt="Course 2">
                    <h3>Web Technologies</h3>
                    <p>Short description of the course.</p>
                    <a href="course-details.php?id=2" class="btn">Enroll Now</a>
                </div>
                <div class="course-card">
                    <img src="../includes/images/ict.jpg" alt="Course 2">
                    <h3>Information and Communication Technologies</h3>
                    <p>Short description of the course.</p>
                    <a href="course-details.php?id=2" class="btn">Enroll Now</a>
                </div>
                <!-- Add more course cards as needed -->
            </div>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>