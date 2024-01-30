<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Activity</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="student-info-container">

  <div class="student-info"> 
  <h2>Student Information Form</h2>

  <form action="index.php" method="post">
      <label for="first-name">First Name:</label> <br>
      <input type="text" id="first-name" name="first-name" required> <br>

      <label for="middle-name">Middle Name:</label> <br>
      <input type="text" id="middle-name" name="middle-name" required> <br>

      <label for="last-name">Last Name:</label> <br>
      <input type="text" id="last-name" name="last-name" required> <br>

      <label for="age">Age:</label> <br>
      <input type="date" id="age" name="age" required> <br>

      <label for="course-year">Course and Year:</label> <br>
      <input type="text" id="course-year" name="course-year" required> <br>

      <label>Enrolled:</label>
      <input type="radio" id="enrolled-yes" name="enrolled" value="Yes" required >
      <label for="enrolled">Yes</label>

      <input type="radio" id="enrolled-no" name="enrolled" value="No" required>
      <label for="not-enrolled">No</label> <br>

      <label for="subject">Subject</label> <br>
      <input type="text" name="subject" id="subject" required> <br>

      <label for="grades">Grades</label> <br>
      <input type="number" name="grades" id="grades" required> <br>

      <input type="submit" value="Submit">

   </form>
   </div>

   <div class="student-info">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      echo "<h2> You have submitted:</h2>";
      echo "<p> First name: {$_POST['first-name']} </p>";
      echo "<p> Middle name: {$_POST['middle-name']} </p>";
      echo "<p> Last name: {$_POST['last-name']} </p>";
      echo "<p> Age: {$_POST['age']} </p>";
      echo "<p> Course and Year: {$_POST['course-year']} </p>";
      echo "<p> Enrolled: {$_POST['enrolled']} </p>";
      echo "<p> Subject: {$_POST['subject']} </p>";
      echo "<p> Grade: {$_POST['grades']} </p>";
      
    }

    ?>
   </div>
   </div>

</body>
</html>