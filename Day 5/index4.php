
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>رفع صورة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Cairo', sans-serif;
            padding: 30px;
        }
        .container {
            max-width: 500px;
        }
        .img-preview {
            max-width: 100%;
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            background-color: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <h3 class="mb-4 text-center">📷 رفع صورة</h3>

    <?php
    $uploaded = false;
    $error = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $allowed = ['image/jpeg', 'image/png'];

        if (in_array($file_type, $allowed)) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            $uploaded = true;
            $image_path = "uploads/" . $file_name;
        } else {
            $error = " يُسمح فقط برفع صور بصيغة JPG أو PNG.";
        }
    }
    ?>

    <?php if ($error): ?>
        <div class="alert alert-danger text-center"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="image" class="form-label">اختر صورة (jpg / png):</label>
            <input class="form-control" type="file" name="image" id="image" accept="image/png, image/jpeg" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">رفع الصورة</button>
    </form>

    <?php if ($uploaded): ?>
        <div class="img-preview text-center">
            <p class="text-success">تم رفع الصورة بنجاح:</p>
            <img src="<?php echo $image_path; ?>" class="img-fluid" alt="Uploaded Image">
        </div>
    <?php endif; ?>
</div>

</body>
</html>