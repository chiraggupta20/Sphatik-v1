<?php
session_start();

// Authentication functions
function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

function isAdmin()
{
    return isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';
}

function requireLogin()
{
    if (!isLoggedIn()) {
        header('Location: ' . SITE_URL . '/auth/login.php');
        exit();
    }
}

function requireAdmin()
{
    if (!isAdmin()) {
        header('Location: ' . SITE_URL . '/dashboard/dashboard.php');
        exit();
    }
}

// Security functions
function sanitizeInput($data)
{
    return htmlspecialchars(strip_tags(trim($data)));
}

function generateToken()
{
    return bin2hex(random_bytes(32));
}

function verifyToken($token)
{
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// File handling functions
function uploadFile($file, $allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'])
{
    if (!isset($file['error']) || is_array($file['error'])) {
        throw new RuntimeException('Invalid parameters.');
    }

    if ($file['size'] > MAX_FILE_SIZE) {
        throw new RuntimeException('File size exceeded.');
    }

    if (!in_array($file['type'], $allowedTypes)) {
        throw new RuntimeException('Invalid file type.');
    }

    $fileName = uniqid() . '_' . sanitizeInput($file['name']);
    $uploadFile = UPLOAD_PATH . $fileName;

    if (!move_uploaded_file($file['tmp_name'], $uploadFile)) {
        throw new RuntimeException('Failed to move uploaded file.');
    }

    return $fileName;
}

// Database helper functions
function executeQuery($sql, $params = [])
{
    global $pdo;
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}

// Notification functions
function setFlashMessage($type, $message)
{
    $_SESSION['flash'] = [
        'type' => $type,
        'message' => $message
    ];
}

function getFlashMessage()
{
    if (isset($_SESSION['flash'])) {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}