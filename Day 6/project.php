
<?php
session_start();
$_SESSION['allowed_users'] = ['ahmed', 'ali', 'sara'];

$loginLogFile = 'logs/login.log';
$uploadLogFile = 'logs/uploads.log';
$uploadDir = 'uploads/';
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);

    $date = date("Y-m-d H:i:s");
    $status = in_array($username, $_SESSION['allowed_users']) ? 'SUCCESS' : 'FAILED';
    $logEntry = "$date | $username | LOGIN ATTEMPT | $status\n";
    file_put_contents($loginLogFile, $logEntry, FILE_APPEND);

    if ($status === 'SUCCESS') {
        $_SESSION['user'] = $username;
    } else {
        $loginError = "Access denied.";
    }
}

if (isset($_POST['upload']) && isset($_SESSION['user'])) {
    if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {
        $fileTmp = $_FILES['file']['tmp_name'];
        $fileName = basename($_FILES['file']['name']);
        $fileType = $_POST['type']; 
        $targetPath = $uploadDir . $fileName;
        $mime = mime_content_type($fileTmp);

        move_uploaded_file($fileTmp, $targetPath);

        $date = date("Y-m-d H:i:s");
        $logEntry = "$date | {$_SESSION['user']} | $fileType | $targetPath | $mime\n";
        file_put_contents($uploadLogFile, $logEntry, FILE_APPEND);

        $uploadSuccess = "File uploaded successfully.";
    } else {
        $uploadError = "Upload failed.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>File Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

  <div class="card">
    <div class="card-header bg-primary text-white">
      <h4>Day 6 – File Manager</h4>
    </div>
    <div class="card-body">
      <?php if (!isset($_SESSION['user'])): ?>
        <form method="post">
          <div class="mb-3">
            <label class="form-label">Username:</label>
            <input type="text" name="username" class="form-control" required>
          </div>
          <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
        <?php if (isset($loginError)) echo "<div class='alert alert-danger mt-3'>$loginError</div>"; ?>
      <?php else: ?>
        <div class="alert alert-success">Welcome <strong><?php echo $_SESSION['user']; ?></strong></div>

        <form method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label class="form-label">Choose file:</label>
            <input type="file" name="file" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">File type:</label>
            <select name="type" class="form-control" required>
              <option value="avatar">Avatar</option>
              <option value="product">Product</option>
            </select>
          </div>
          <button type="submit" name="upload" class="btn btn-success">Upload</button>
        </form>

        <?php
        if (isset($uploadSuccess)) echo "<div class='alert alert-success mt-3'>$uploadSuccess</div>";
        if (isset($uploadError)) echo "<div class='alert alert-danger mt-3'>$uploadError</div>";
        ?>
        <form method="post" class="mt-3">
          <button type="submit" name="logout" class="btn btn-secondary">Logout</button>
        </form>
      <?php endif; ?>

      <?php
      if (isset($_POST['logout'])) {
          session_destroy();
          header("Location: index.php");
          exit;
      }
      ?>
    </div>
  </div>
</div>

</body>
</html>
