<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Developer Tools - PHP Task 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

    <div class="container my-5">
        <h2 class="text-center mb-4">🛠 Developer Tools</h2>

        <?php
        $tools = ["VS Code", "Git", "GitHub", "Figma", "Postman"];
        $count = count($tools);
        $hasGithub = in_array("GitHub", $tools);
        $values = array_values($tools);
        ?>
        <div class="alert alert-primary">
            عدد الأدوات: <strong><?php echo $count; ?></strong>
        </div>

        <div class="alert alert-<?php echo $hasGithub ? 'success' : 'danger'; ?>">
            <?php
            echo $hasGithub ? " GitHub موجود في القائمة." : " GitHub غير موجود.";
            ?>
        </div>

        <h4> قائمة الأدوات:</h4>
        <ul class="list-group">
            <?php
            foreach ($values as $tool) {
                echo "<li class='list-group-item list-group-item-light'>$tool</li>";
            }
            ?>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

