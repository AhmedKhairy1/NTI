
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Session Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-success text-white">
      <h4>Save Info to Session</h4>
    </div>
    <div class="card-body">
      <form method="post">
        <div class="mb-3">
          <label for="name" class="form-label">Name:</label>
          <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save to Session</button>
      </form>

      <?php if (isset($_SESSION['name']) && isset($_SESSION['email'])): ?>
        <hr>
        <div class="alert alert-info">
          <strong>Saved Info:</strong><br>
          Name: <?php echo $_SESSION['name']; ?><br>
          Email: <?php echo $_SESSION['email']; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

</body>
</html>

