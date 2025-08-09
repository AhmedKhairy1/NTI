
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Task 8 - Employee Salaries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-warning-subtle">

    <div class="container my-5">
        <h2 class="text-center mb-4"> Employees with Salary > 5000</h2>

        <?php
        $employees = [
            "Ahmed" => 7000,
            "Mona" => 4500,
            "Khaled" => 8000,
            "Sara" => 5000,
            "Omar" => 9500
        ];
        $highPaid = array_filter($employees, function($salary) {
            return $salary > 5000;
        });
        ?>
        <ul class="list-group">
            <?php
            foreach ($highPaid as $name => $salary) {
                echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
                echo "<span>$name</span>";
                echo "<span><strong>$salary EGP</strong></span>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

