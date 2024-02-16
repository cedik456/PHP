<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index II</title>
</head>
<body>

  <?php
  $globalVariable = "Sung Jin Woo";

  function useGlobalVariable () {

    global $globalVariable;

    echo $globalVariable;

  }

  useGlobalVariable (); 

  ?>
  
</body>
</html>