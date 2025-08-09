
<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        echo "<div style='color: green;'> Logged in successfully (SECURE)</div>";
    } else {
        echo "<div style='color: red;'> Invalid credentials</div>";
    }
}
?>

<h2> Secure Login Form</h2>
<form method="post">
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="text" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
</form>

> 