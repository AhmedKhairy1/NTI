
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>High Salary Employees - PHP Task 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary text-white">

    <div class="container my-5">
        <h2 class="text-center mb-4">💼 Employees with Salary > 8000</h2>

        <?php
        $employees = [
            ["name" => "Ahmed", "department" => "IT", "salary" => 10000],
            ["name" => "Mona", "department" => "HR", "salary" => 7500],
            ["name" => "Khaled", "department" => "Finance", "salary" => 9000],
            ["name" => "Salma", "department" => "Marketing", "salary" => 8500],
            ["name" => "Omar", "department" => "Support", "salary" => 7000]
        ];
        ?>
        <table class="table table-bordered table-striped bg-white text-dark">
            <thead class="table-dark text-center">
                <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Salary (EGP)</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                foreach ($employees as $emp) {
                    if ($emp['salary'] > 8000) {
                        echo "<tr>";
                        echo "<td>{$emp['name']}</td>";
                        echo "<td>{$emp['department']}</td>";
                        echo "<td>{$emp['salary']}</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

