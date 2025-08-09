
<?php
include 'db.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM courses WHERE id = $id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Course</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

  <h2>Edit Course</h2>
  <form action="update_course.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <div class="mb-3">
      <label>Title</label>
      <input type="text" name="title" class="form-control" value="<?= $row['title'] ?>" required>
    </div>
    <div class="mb-3">
      <label>Description</label>
      <textarea name="description" class="form-control"><?= $row['description'] ?></textarea>
    </div>
    <div class="mb-3">
      <label>Hours</label>
      <input type="number" name="hours" class="form-control" value="<?= $row['hours'] ?>" required>
    </div>
    <div class="mb-3">
      <label>Price</label>
      <input type="number" name="price" class="form-control" step="0.01" value="<?= $row['price'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>

</body>
</html>
