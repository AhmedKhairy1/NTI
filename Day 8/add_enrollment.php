
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Enrollment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

  <h2>Add Enrollment</h2>
  <form action="insert_enrollment.php" method="POST">
    <div class="mb-3">
      <label>Student</label>
      <select name="student_id" class="form-select" required>
        <option value="">Select student</option>
        <?php
        $students = mysqli_query($conn, "SELECT * FROM students");
        while ($student = mysqli_fetch_assoc($students)) {
            echo "<option value='{$student['id']}'>{$student['name']}</option>";
        }
        ?>
      </select>
    </div>

    <div class="mb-3">
      <label>Course</label>
      <select name="course_id" class="form-select" required>
        <option value="">Select course</option>
        <?php
        $courses = mysqli_query($conn, "SELECT * FROM courses");
        while ($course = mysqli_fetch_assoc($courses)) {
            echo "<option value='{$course['id']}'>{$course['title']}</option>";
        }
        ?>
      </select>
    </div>

    <div class="mb-3">
      <label>Grade</label>
      <input type="text" name="grade" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Enroll</button>
  </form>

</body>
</html>