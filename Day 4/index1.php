
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Table - PHP Task 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-success text-white">

    <div class="container my-5">
        <h1 class="text-center mb-4">📦 Product List</h1>

        <?php
        // تعريف المصفوفة متعددة الأبعاد
        $products = [
            ["name" => "Laptop", "price" => 15000, "quantity" => 3],
            ["name" => "Phone",  "price" => 8000,  "quantity" => 5],
            ["name" => "Tablet", "price" => 6000,  "quantity" => 2]
        ];
        ?>
        <table class="table table-striped table-bordered bg-white text-dark">
            <thead class="table-dark text-center">
                <tr>
                    <th>Name</th>
                    <th>Price (EGP)</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                foreach ($products as $product) {
                    echo "<tr>";
                    echo "<td>{$product['name']}</td>";
                    echo "<td>{$product['price']}</td>";
                    echo "<td>{$product['quantity']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
