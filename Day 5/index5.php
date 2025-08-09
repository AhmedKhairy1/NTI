
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>رفع مجموعة صور</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Cairo', sans-serif;
            padding: 30px;
        }
        .container {
            max-width: 600px;
        }
    </style>
</head>
<body>

<div class="container">
    <h3 class="mb-4 text-center"> رفع مجموعة صور</h3>

    <?php
    $errors = [];
    $success = [];

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['images'])) {
        $allowed_ext = ['jpg', 'jpeg'];
        $allowed_mime = ['image', 'wave'];
        $max_size = 4 * 1024 * 1024;

        $files = $_FILES['images'];
        $count = count($files['name']);

        for ($i = 0; $i < $count; $i++) {
            $name = $files['name'][$i];
            $tmp = $files['tmp_name'][$i];
            $size = $files['size'][$i];
            $type = $files['type'][$i];

            $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
            $mime_group = explode('/', $type)[0];

            if (!in_array($ext, $allowed_ext)) {
                $errors[] = " النوع غير مسموح به: $name (امتداد .$ext)";
                continue;
            }

            if (!in_array($mime_group, $allowed_mime)) {
                $errors[] = " النوع MIME غير مسموح به: $name (نوع $type)";
                continue;
            }

            if ($size > $max_size) {
                $errors[] = "الملف كبير جدًا: $name (الحجم = " . round($size / 1048576, 2) . " MB)";
                continue;
            }
            $destination = 'uploads/' . $name;
            move_uploaded_file($tmp, $destination);
            $success[] = $name;
        }
    }
    ?>

    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <strong>فشل في رفع بعض الصور:</strong>
            <ul>
                <?php foreach ($errors as $e): ?>
                    <li><?= $e ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if (!empty($success)): ?>
        <div class="alert alert-success">
            تم رفع الصور التالية بنجاح:
            <ul>
                <?php foreach ($success as $s): ?>
                    <li><?= $s ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">اختر مجموعة صور:</label>
            <input type="file" class="form-control" name="images[]" multiple accept=".jpg,.jpeg,image/*">
        </div>
        <button type="submit" class="btn btn-primary w-100">رفع الصور</button>
    </form>
</div>

</body>
</html>