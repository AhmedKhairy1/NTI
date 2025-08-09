
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Enrollments</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

  <h2 class="mb-4">All Enrollments</h2>
  <a href="add_enrollment.php" class="btn btn-success mb-3">Add Enrollment</a>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Course Title</th>
        <th>Grade</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT enrollments.id, students.name AS student_name, courses.title AS course_title, 
                     enrollments.grade, enrollments.created_at
              FROM enrollments
              JOIN students ON enrollments.student_id = students.id
              JOIN courses ON enrollments.course_id = courses.id";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['student_name']}</td>
                  <td>{$row['course_title']}</td>
                  <td>{$row['grade']}</td>
                  <td>{$row['created_at']}</td>
                </tr>";
      }
      ?>
    </tbody>
  </table>

</body>
</html>
