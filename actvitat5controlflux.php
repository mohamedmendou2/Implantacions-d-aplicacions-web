<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovar edat</title>
</head>
<body>
    <h2>Comprova la teva edat i si ets major d'edat</h2>

    <form method="POST">
        <label for="data_naixement">Introdueix la teva data de naixement:</label>
        <input type="date" name="data_naixement" id="data_naixement" required><br><br>
        
        <input type="submit" value="Comprovar edat">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $data_naixement = $_POST['data_naixement'];

 
        $data_naixement = new DateTime($data_naixement);
        
        $data_actual = new DateTime();

        
        $diferencia = $data_actual->diff($data_naixement);
        $edat = $diferencia->y;

     
        echo "<p>Tens $edat anys.</p>";

        if ($edat >= 18) {
            echo "<p>Ets major d'edat.</p>";
        } else {
            echo "<p>No ets major d'edat.</p>";
        }
    }
    ?>
</body>
</html>
