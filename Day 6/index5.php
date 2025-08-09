
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Uploaded Images Gallery</title>
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
  <h2 class="text-center mb-4">Uploaded Images</h2>
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
