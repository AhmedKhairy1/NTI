
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>Day 5: Task 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f2f2;
            padding: 20px;
            font-family: 'Cairo', sans-serif;
        }
        .header {
            background-color: #5c3d2e;
            color: white;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        .task-box {
            background-color: #000;
            color: pink;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .info-box {
            background-color: #8b0000;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .info-box ul {
            list-style: none;
            padding: 0;
        }
        .info-box li::before {
            content: "🟩 ";
        }
        table {
            background-color: white;
        }
    </style>
</head>
<body>

    <div class="header">
        <h2>Day 5: Task 1</h2>
    </div>

    <div class="task-box">
        <h4> Task 1</h4>
    </div>

    <div class="info-box">
        <p>اعرض في صفحة HTML مصممة بـ Bootstrap:</p>
        <ul>
            <li>اسم السكريبت الحالي</li>
            <li>عنوان الـ IP للمستخدم</li>
            <li>نوع المتصفح</li>
            <li>نوع الريكويست</li>
        </ul>
    </div>

    <?php
    $script_name = $_SERVER['PHP_SELF'];
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $request_method = $_SERVER['REQUEST_METHOD'];
    ?>

    <div class="container">
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>Key</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PHP_SELF</td>
                    <td><?php echo $script_name; ?></td>
                </tr>
                <tr>
                    <td>SERVER_NAME</td>
                    <td><?php echo $_SERVER['SERVER_NAME']; ?></td>
                </tr>
                <tr>
                    <td>HTTP_HOST</td>
                    <td><?php echo $_SERVER['HTTP_HOST']; ?></td>
                </tr>
                <tr>
                    <td>USER_AGENT</td>
                    <td><?php echo $browser; ?></td>
                </tr>
                <tr>
                    <td>REQUEST_METHOD</td>
                    <td><?php echo $request_method; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>