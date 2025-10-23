<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovar si és parell o imparell</title>
</head>
<body>
    <h2>Comprovar si un número és parell o imparell</h2>

    <form method="POST">
        <label for="numero">Introdueix un número:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Comprovar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtenir el número introduït pel formulari
        $numero = $_POST['numero'];

        // Comprovar si el número és parell o imparell
        if ($numero % 2 == 0) {
            echo "<p>El número $numero és parell.</p>";
        } else {
            echo "<p>El número $numero és imparell.</p>";
        }
    }
    ?>
</body>
</html>
