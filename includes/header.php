<?php
define("BASE_URL", "http://localhost/Sphatik v1/");
?>

<header class="header">
    <div class="container">
        <a href="sphatik v1/index.php" class="logo">Sphatik</a>
        <nav class="nav">
            <button class="mobile-menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-list">
                <li class="lsit-item"><a href="<?= BASE_URL ?>index.php" style="text-decoration: none;">Home</a></li>
                <li class="lsit-item"><a href="<?= BASE_URL ?>courses/courses.php">Courses</a></li>
                <li class="lsit-item"><a href="<?= BASE_URL ?>freelance.php">Freelance</a></li>
                <li class="lsit-item"><a href="<?= BASE_URL ?>services.php">Local Services</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li class="lsit-item"><a href="<?= BASE_URL ?>profile.php">Profile</a></li>
                    <li class="lsit-item"><a href="<?= BASE_URL ?>/auth/logout.php">Logout</a></li>
                <?php else: ?>
                    <li class="lsit-item"><a href="<?= BASE_URL ?>/auth/login.php" class="btn btn-login">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>