
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Task 7 - Product Prices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <h2 class="text-center mb-4">🛍 Product Prices (High to Low)</h2>

        <?php
        $products = [
            "Laptop" => 18000,
            "Phone" => 12000,
            "Tablet" => 8500,
            "Smart Watch" => 6000,
            "Headphones" => 4000
        ];
        arsort($products);
        ?>
        <ul class="list-group">
            <?php
            foreach ($products as $product => $price) {
                echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
                echo "<span>$product</span>";
                echo "<span><strong>$price EGP</strong></span>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
