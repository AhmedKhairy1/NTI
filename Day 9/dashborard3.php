
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php?error=Please login first");
    exit();
}

$name = $_SESSION['name'];
$role = $_SESSION['role'];
$login_time = $_SESSION['login_time'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - <?php echo ucfirst($role); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
<div class="container">
    <h2>Welcome, <?php echo $name; ?> (<?php echo $role; ?>)</h2>
    <p>Login Time: <?php echo $login_time; ?></p>

    <?php if (isset($_GET['message'])): ?>
        <div class="alert alert-success"><?php echo htmlspecialchars($_GET['message']); ?></div>
    <?php endif; ?>

    <div class="row">
        <?php if ($role === 'admin'): ?>
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Admin Panel</div>
                    <div class="card-body">
                        <h5 class="card-title">Manage Users</h5>
                        <p class="card-text">Add, Edit or Delete users.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header">Reports</div>
                    <div class="card-body">
                        <h5 class="card-title">System Reports</h5>
                        <p class="card-text">View system statistics and logs.</p>
                    </div>
                </div>
            </div>

        <?php else: ?>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">User Dashboard</div>
                    <div class="card-body">
                        <h5 class="card-title">My Profile</h5>
                        <p class="card-text">View and edit your profile.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Courses</div>
                    <div class="card-body">
                        <h5 class="card-title">Enrolled Courses</h5>
                        <p class="card-text">View your course list and progress.</p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>
</body>
</html>
