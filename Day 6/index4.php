
<?php
$uploadMessage = "";
$imagePath = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $targetDir = "uploads/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetFile = $targetDir . $fileName;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $fileSize = $_FILES["image"]["size"];
    $allowedTypes = ["jpg", "jpeg", "png"];
    if (!in_array($imageFileType, $allowedTypes)) {
        $uploadMessage = '<div class="alert alert-danger">Only JPG, JPEG, PNG files are allowed.</div>';
    }
    elseif ($fileSize > 2 * 1024 * 1024) {
        $uploadMessage = '<div class="alert alert-danger">File is too large. Max size is 2MB.</div>';
    }
    elseif (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $uploadMessage = '<div class="alert alert-success">Image uploaded successfully!</div>';
        $imagePath = $targetFile;
    } else {
        $uploadMessage = '<div class="alert alert-danger">Sorry, there was an error uploading your file.</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Secure Image Upload</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-primary text-white">
      <h4>Secure Image Upload</h4>
    </div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="image" class="form-label">Choose an Image (JPG, PNG)</label>
          <input type="file" name="image" id="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
      </form>
      <?php echo $uploadMessage; ?>
      <?php if ($imagePath): ?>
        <div class="mt-3">
          <h5>Uploaded Image:</h5>
          <img src="<?php echo $imagePath; ?>" class="img-thumbnail" style="max-width: 300px;">
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

</body>
</html>

