
<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "student_system";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}
?>
