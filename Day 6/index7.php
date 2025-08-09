
<?php
$alert = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["delete"])) {
        $filename = basename($_POST["delete"]); 
        $filepath = "uploads/" . $filename;

        if (file_exists($filepath)) {
            unlink($filepath);
            $alert = '<div class="alert alert-success"> <strong>' . htmlspecialchars($filename) . '</strong> deleted successfully.</div>';
        } else {
            $alert = '<div class="alert alert-danger"> File <strong>' . htmlspecialchars($filename) . '</strong> not found.</div>';
        }
    } else {
        $alert = '<div class="alert alert-warning">⚠ No data sent for deletion.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delete Images - Task 7</title>
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
  <h2 class="text-center mb-4">Task 7 - Delete Images</h2>
  <?php echo $alert; ?>

  <div class="row justify-content-center">
    <?php
    $dir = "uploads/";
    $images = array_diff(scandir($dir), array('.', '..'));

    if (empty($images)) {
        echo "<p class='text-center'>No images found in the folder.</p>";
    } else {
        foreach ($images as $img) {
            $imgPath = $dir . $img;
            echo '
            <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
              <div class="card shadow" style="width: 18rem;">
                <img src="' . $imgPath . '" class="card-img-top" alt="Uploaded Image">
                <div class="card-body text-center">
                  <p class="card-text">' . htmlspecialchars($img) . '</p>
                  <form method="post">
                    <input type="hidden" name="delete" value="' . htmlspecialchars($img) . '">
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </div>
              </div>
            </div>';
        }
    }
    ?>
  </div>
</div>

</body>
</html>

