
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>PHP Task 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light p-5">
  <div class="container">
    <div class="card bg-success">
      <div class="card-header text-white">المهمة 2: مجموع رقمين وباقي القسمة</div>
      <div class="card-body">
        <?php
          $num1 = 14;
          $num2 = 12;
          $sum = $num1 + $num2;
          $rem = $num1 % $num2;
          echo "الرقم الأول: $num1<br>";
          echo "الرقم الثاني: $num2<br>";
          echo "المجموع: $sum<br>";
          echo "باقي القسمة: $rem";
        ?>
      </div>
    </div>
  </div>
</body>
</html>