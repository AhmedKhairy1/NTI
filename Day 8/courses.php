
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Courses</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

  <h2 class="mb-4">All Courses</h2>
  <a href="add_course.php" class="btn btn-success mb-3">Add Course</a>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Hours</th>
        <th>Price</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = mysqli_query($conn, "SELECT * FROM courses");
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['title']}</td>
                  <td>{$row['description']}</td>
                  <td>{$row['hours']}</td>
                  <td>{$row['price']}</td>
                  <td>
                    <a href='edit_course.php?id={$row['id']}' class='btn btn-primary btn-sm'>Edit</a>
                    <a href='pdelete_course.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                  </td>
                </tr>";
      }
      ?>
    </tbody>
  </table>

</body>
</html>
