

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>PHP Task 3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light p-5">
  <div class="container">
    <div class="card bg-warning text-dark">
      <div class="card-header">المهمة 3: تحديد النجاح أو الرسوب</div>
      <div class="card-body">
        <form method="post" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="grade" class="form-label">أدخل درجتك</label>
            <input type="number" class="form-control" name="grade" id="grade" min="0" max="100" required>
            <div class="invalid-feedback">أدخل درجة صحيحة من 0 إلى 100</div>
          </div>
          <button class="btn btn-dark" type="submit">تحقق</button>
        </form>

        <hr>

        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $grade = $_POST["grade"];
            if ($grade === "") {
              echo "أدخل الدرجة";
            } elseif ($grade >= 50) {
              echo "الطالب ناجح";
            } else {
              echo "الطالب راسب";
            }
          }
        ?>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    (() => {
      const forms = document.querySelectorAll('.needs-validation');
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();
  </script>
</body>
</html>
