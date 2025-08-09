<?php
session_start();
require 'db.php';

if (isset($_POST['login'])) 
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

$stmt = $conn->prepare("SELECT id, name, password, role FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    $stmt->bind_result($id, $name, $hashed_password, $role);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
        $_SESSION['user_id'] = $id;
        $_SESSION['name'] = $name;
        $_SESSION['role'] = $role;
        $_SESSION['login_time'] = date("Y-m-d H:i:s");

        header("Location: dashboard.php?message=Login successful");
    } else {
        header("Location: login.php?error=Wrong password");
    }
}


