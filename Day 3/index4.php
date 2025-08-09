
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>PHP Task 4</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light p-5">
  <div class="container">
    <div class="card bg-info text-dark">
      <div class="card-header">المهمة 4: طباعة الأرقام من 0 إلى 20</div>
      <div class="card-body">
        <h5>الطريقة الأولى (خطوة 5):</h5>
        <?php
          for ($i = 0; $i <= 20; $i += 5) {
            echo "$i ";
          }
        ?>

        <hr>

        <h5>الطريقة الثانية (شرط القسمة على 5):</h5>
        <?php
          for ($i = 0; $i <= 20; $i++) {
            if ($i % 5 == 0) {
              echo "$i ";
            }
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>
