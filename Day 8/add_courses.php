
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Course</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

  <h2>Add New Course</h2>
  <form action="insert_course.php" method="POST">
    <div class="mb-3">
      <label>Title</label>
      <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Description</label>
      <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="mb-3">
      <label>Hours</label>
      <input type="number" name="hours" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Price</label>
      <input type="number" name="price" class="form-control" step="0.01" required>
    </div>
    <button type="submit" class="btn btn-success">Insert</button>
  </form>

</body>
</html>
