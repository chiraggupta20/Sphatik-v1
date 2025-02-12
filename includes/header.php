<header class="header">
    <div class="container">
        <a href="../index.php" class="logo">Sphatik</a>
        <nav class="nav">
            <button class="mobile-menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-list">
                <li class="lsit-item"><a href="./index.php">Home</a></li>
                <li class="lsit-item"><a href="./courses/courses.php">Courses</a></li>
                <li class="lsit-item"><a href="./freelance.php">Freelance</a></li>
                <li class="lsit-item"><a href="./services.php">Local Services</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="auth/logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="auth/login.php" class="btn btn-login">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>