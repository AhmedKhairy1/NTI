
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Info - PHP Task 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <h2 class="text-center mb-4">👨‍💼 Employee Information</h2>

        <?php
    
        $employee = [
            "Name"       => "Ahmed Mahmoud",
            "Job Title"  => "Web Developer",
            "Department" => "IT",
            "Salary"     => "10000 EGP"
        ];
        ?>
        <ul class="list-group">
            <?php
            foreach ($employee as $key => $value) {
                echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
                echo "<strong>$key:</strong> <span>$value</span>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
