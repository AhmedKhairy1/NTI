
<?php
require 'db.php';

$users = [
    ['Admin', 'admin@example.com', 'admin123', 'admin'],
    ['User', 'user@example.com', 'user123', 'user']
];

foreach ($users as $u) {
    $name = $u[0];
    $email = $u[1];
    $password = password_hash($u[2], PASSWORD_DEFAULT);
    $role = $u[3];

    $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $password, $role);
    $stmt->execute();
}
echo "Sample users created!";
?>
