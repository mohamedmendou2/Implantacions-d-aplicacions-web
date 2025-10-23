<!DOCTYPE html>

<html lang="ca">

<head>

    <meta charset="UTF-8">

    <title>Comprovació de número</title>

</head>

<body>

    <h2>Introdueix un número</h2>

    <form method="post">

        <input type="number" name="numero" required>

        <button type="submit">Comprova</button>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numero = $_POST["numero"];

        if (is_numeric($numero)) {

            if ($numero > 0) {

                echo "<p>✅ El número és més gran que zero.</p>";

            } else {

                echo "<p>❌ El número NO és més gran que zero.</p>";

            }

        } else {

            echo "<p>⚠️ No has introduït un número vàlid.</p>";

        }

    }

    ?>

</body>

</html>
