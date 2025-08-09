<?php include 'navigation.php'; ?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>إضافة طالب</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">نموذج تسجيل طالب</h2>
    <form action="insert_student.php" method="POST" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label class="form-label">الاسم</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">البريد الإلكتروني</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">رقم الهاتف (اختياري)</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">تاريخ الميلاد</label>
            <input type="date" name="birthdate" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">تسجيل</button>
    </form>
</div>
</body>
</html>