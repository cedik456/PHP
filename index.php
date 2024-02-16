<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Age Checker</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .message-container {
      text-align: center;
    }
  </style>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <label for="age">Enter your age: </label>
  <input type="number" id="age" name="age" required>
  <button type="submit">Check Eligibility</button>
  
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userAge = isset($_POST["age"]) ? intval($_POST["age"]) : 0;
        $minAge = 18;
        $maxAge = 30;

        echo '<div class="message-container">'; // Opening the div for centering
        if ($userAge >= $minAge && $userAge <= $maxAge) {
            echo "<p>Congratulations! You are eligible.</p><br>";
        } else {
            echo "<p>Sorry, you are not within the eligible age range.</p>";
        }
        echo '</div>'; // Closing the div for centering
    }
  ?>
</form>

</body>
</html>
