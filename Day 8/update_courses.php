
<?php
include 'db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$desc = $_POST['description'];
$hours = $_POST['hours'];
$price = $_POST['price'];

$sql = "UPDATE courses SET 
          title='$title', 
          description='$desc', 
          hours=$hours, 
          price=$price 
        WHERE id=$id";

mysqli_query($conn, $sql);

header("Location: courses.php");
