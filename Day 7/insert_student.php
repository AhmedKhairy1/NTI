
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $birthdate = mysqli_real_escape_string($conn, $_POST["birthdate"]);

    $sql = "INSERT INTO students (name, email, phone, birthdate)
            VALUES ('$name', '$email', '$phone', '$birthdate')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "خطأ: " . mysqli_error($conn);
    }
}
?>
