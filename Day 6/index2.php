
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Text Analyzer Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-primary text-white">
      <h4>Text Analyzer</h4>
    </div>
    <div class="card-body">
      <form method="post">
        <div class="mb-3">
          <label for="sentence" class="form-label">Enter a Sentence</label>
          <input type="text" name="sentence" id="sentence" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Analyze</button>
      </form>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $text = $_POST["sentence"];
          $length = strlen($text);
          $replaced = str_replace("bad", "*", $text);
          $first10 = substr($text, 0, 10);
          $ucfirst = ucfirst($text);
          $upper = strtoupper($text);

          echo "<hr>";
          echo "<h5>Results:</h5>";
          echo "<ul class='list-group'>";
          echo "<li class='list-group-item'>Original Text: <strong>$text</strong></li>";
          echo "<li class='list-group-item'>Length: $length characters</li>";
          echo "<li class='list-group-item'>After str_replace('bad', '*'): $replaced</li>";
          echo "<li class='list-group-item'>First 10 Characters: $first10</li>";
          echo "<li class='list-group-item'>ucfirst(): $ucfirst</li>";
          echo "<li class='list-group-item'>strtoupper(): $upper</li>";
          echo "</ul>";
      }
      ?>
    </div>
  </div>
</div>

</body>
</html>

