<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['name'] = $_POST['name'] ?? '';
    $_SESSION['email'] = $_POST['email'] ?? '';
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>Form - حفظ البيانات في Session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">تسجيل البيانات</h2>

    <?php if (isset($_SESSION['name']) && isset($_SESSION['email'])): ?>
        <div class="alert alert-success">
            <strong>تم الحفظ!</strong> مرحبًا يا <?= htmlspecialchars($_SESSION['name']) ?>، إيميلك هو <?= htmlspecialchars($_SESSION['email']) ?>.
        </div>
    <?php endif; ?>

    <form method="POST" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label for="name" class="form-label">الاسم</label>
            <input type="text" name="name" class="form-control" id="name" required placeholder="اكتب اسمك">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">الإيميل</label>
            <input type="email" name="email" class="form-control" id="email" required placeholder="example@email.com">
        </div>
        <button type="submit" class="btn btn-primary">إرسال</button>
    </form>
</div>

</body>
</html>
