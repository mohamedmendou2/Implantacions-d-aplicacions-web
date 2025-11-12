<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <title>Vocal o consonant</title>
</head>
<body>
  <form method="post">
    Introdueix una lletra: 
    <input type="text" name="lletra" maxlength="1" required>
    <input type="submit" value="Comprova">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lletra = strtolower($_POST["lletra"]);
    if (in_array($lletra, ['a','e','i','o','u'])) {
      echo "<p>$lletra és una vocal.</p>";
    } else {
      echo "<p>$lletra és una consonant.</p>";
    }
  }
  ?>
</body>
</html>
