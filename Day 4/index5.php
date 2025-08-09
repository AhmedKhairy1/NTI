
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Task 6 - Course List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-info-subtle">

    <div class="container my-5">
        <h2 class="text-center mb-4">📚 Course List</h2>

        <?php
        $courses = ["HTML", "CSS", "JS", "PHP"];
        array_push($courses, "MySQL");
        array_unshift($courses, "Git");
        array_shift($courses);
        ?>
        <ul class="list-group">
            <?php
            foreach ($courses as $course) {
                echo "<li class='list-group-item'>$course</li>";
            }
            ?>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
