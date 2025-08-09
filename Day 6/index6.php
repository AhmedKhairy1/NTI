
<?php
$alert = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $file = "uploads/" . $_POST["delete"];

    if (file_exists($file)) {
        unlink($file);
        $alert = '<div class="alert alert-success">Image <strong>' . htmlspecialchars($_POST["delete"]) . '</strong> deleted successfully.</div>';
    } else {
        $alert = '<div class="alert alert-danger">Image <strong>' . htmlspecialchars($_POST["delete"]) . '</strong> not found.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delete Uploaded Images</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card img {
      max-height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="text-center mb-4">Delete Uploaded Images</h2>
  <?php echo $alert; ?>

  <div class="row justify-content-center">
    <?php
    $dir = "uploads/";
    $images = array_diff(scandir($dir), array('.', '..'));

    if (count($images) === 0) {
        echo "<p class='text-center'>No images found.</p>";
    } else {
        foreach ($images as $image) {
            $path = $dir . $image;
            echo '
            <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
              <div class="card shadow" style="width: 18rem;">
                <img src="' . $path . '" class="card-img-top" alt="Image">
                <div class="card-body text-center">
                  <p class="card-text">' . htmlspecialchars($image) . '</p>
                  <form method="post">
                    <input type="hidden" name="delete" value="' . htmlspecialchars($image) . '">
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </div>
              </div>
            </div>
            ';
        }
    }
    ?>
  </div>
</div>

</body>
</html>

