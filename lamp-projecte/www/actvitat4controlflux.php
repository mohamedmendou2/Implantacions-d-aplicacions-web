<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovar nota</title>
</head>
<body>
    <h2>Comprova la teva nota</h2>

    <form method="POST">
        <label for="nota">Introdueix una nota (1-10):</label>
        <input type="number" name="nota" id="nota" min="1" max="10" required><br><br>
        
        <input type="submit" value="Comprovar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtenir la nota introduïda pel formulari
        $nota = $_POST['nota'];

        // Comprovar si la nota és dins de l'interval 1-10
        if ($nota >= 1 && $nota <= 10) {
            // Comprovar si la nota és aprovada o suspesa
            if ($nota >= 5) {
                echo "<p>Aprovat!</p>";
            } else {
                echo "<p>Suspès!</p>";
            }
        } else {
            echo "<p>La nota ha de ser entre 1 i 10.</p>";
        }
    }
    ?>
</body>
</html>
