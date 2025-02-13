<?php
require '../includes/config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $stmt = $pdo->prepare("SELECT user_id, password_hash, role FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password_hash'])) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['role'] = $user['role'];

        // Redirect based on user role
        switch ($user['role']) {
            case 'admin':
                header("Location: ../dashboard/admin.php");
                break;
            case 'delivery_partner':
                header("Location: ../dashboard/delivery.php");
                break;
            case 'employer':
                header("Location: ../dashboard/employer.php");
                break;
            case 'instructor':
                header("Location: ../dashboard/instructor.php");
                break;
            default:
                header("Location: ../user_profile.php");
                break;
        }
        exit();
    } else {
        $error_message = "Invalid email or password.";
    }
}
?>

<!-- Login Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sphatik</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="log-body">
    <div class="f-container">
        <div class="form-container">
            <h1>Login</h1>
            <?php if (isset($error_message)) { echo "<p style='color:red;'>$error_message</p>"; } ?>
            <form method="POST" class="log-form">
                <div class="input-container">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-container">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="register.php">Register</a></p>
        </div>
        <div class="right">
            <h2>Welcome Back!</h2>
            <p>We're excited to see you again! Log in to continue where you left off and explore new features.</p>
        </div>
    </div>
</body>
</html>
