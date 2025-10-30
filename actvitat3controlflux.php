<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trobar el número més gran</title>
</head>
<body>
    <h2>Trobar el número més gran</h2>

    <form method="POST">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>
        
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="num3">Número 3:</label>
        <input type="number" name="num3" id="num3" required><br><br>
        
        <input type="submit" value="Comprovar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

      
        $max = max($num1, $num2, $num3);

        echo "<p>El número més gran és: $max</p>";
    }
    ?>
</body>
</html>
