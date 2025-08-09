
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: 'Cairo', sans-serif;
        }
        .login-box {
            margin-top: 100px;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .form-control {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 login-box">
            <h4 class="text-center mb-4">تسجيل الدخول</h4>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $username = $_POST['username'] ?? '';
                $password = $_POST['password'] ?? '';
                $valid_user = "admin";
                $valid_pass = "12345";

                if ($username === $valid_user && $password === $valid_pass) {
                    echo '<div class="alert alert-success text-center">مرحباً، تم تسجيل الدخول بنجاح!</div>';
                } else {
                    echo '<div class="alert alert-danger text-center">اسم المستخدم أو كلمة المرور غير صحيحة</div>';
                }
            }
            ?>

            <form method="POST" action="">
                <label for="username">اسم المستخدم:</label>
                <input type="text" class="form-control" name="username" id="username" required>

                <label for="password">كلمة المرور:</label>
                <input type="password" class="form-control" name="password" id="password" required>

                <button type="submit" class="btn btn-primary w-100">تسجيل الدخول</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>