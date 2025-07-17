<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$age = $_POST['age'] ?? '';
$city = $_POST['city'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Profile</title>
  <style>
    body {
      background-color: #e8f5e9;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .profile-box {
      background-color: white;
      padding: 25px 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 350px;
    }
    h2 {
      text-align: center;
      color: #4CAF50;
      margin-bottom: 20px;
    }
    .info {
      margin-bottom: 10px;
    }
    .info strong {
      color: #333;
    }
    a {
      display: block;
      text-align: center;
      margin-top: 20px;
      text-decoration: none;
      color: white;
      background-color: #4CAF50;
      padding: 10px;
      border-radius: 5px;
    }
    a:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <div class="profile-box">
    <h2>User Profile</h2>

    <div class="info"><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></div>
    <div class="info"><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></div>
    <div class="info"><strong>Age:</strong> <?php echo htmlspecialchars($age); ?></div>
    <div class="info"><strong>City:</strong> <?php echo htmlspecialchars($city); ?></div>

    <a href="index.html">Back to Form</a>
  </div>

</body>
</html>
