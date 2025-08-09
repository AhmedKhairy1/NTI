
<?php
include 'db.php';

$title = $_POST['title'];
$desc = $_POST['description'];
$hours = $_POST['hours'];
$price = $_POST['price'];

$sql = "INSERT INTO courses (title, description, hours, price)
        VALUES ('$title', '$desc', $hours, $price)";

mysqli_query($conn, $sql);

header("Location: courses.php");