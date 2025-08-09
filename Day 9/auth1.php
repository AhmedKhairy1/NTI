
<?php
session_start();
$valid_email = "admin@example.com";
$valid_password = "123456";
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email === $valid_email && $password === $valid_password) {
    $_SESSION['logged_in'] = true;
    $_SESSION['login_time'] = date("Y-m-d H:i:s");
    $_SESSION['email'] = $email;
    header("Location: dashboard.php?message=Login successful");
    exit();
} else {
    header("Location: login.php?error=Invalid email or password");
    exit();
}