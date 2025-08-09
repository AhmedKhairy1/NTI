
<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php?error=Please login first");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">

<div class="container">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>!</h2>
    <p><strong>Login Time:</strong> <?php echo $_SESSION['login_time']; ?></p>

    <?php if (isset($_GET['message'])): ?>
        <div class="alert alert-success"><?php echo htmlspecialchars($_GET['message']); ?></div>
    <?php endif; ?>

    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>

</body>
</html>
