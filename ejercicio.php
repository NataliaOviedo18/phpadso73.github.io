<?php
if ($_POST) {
    $edad = $_POST["edad"];
    if ($edad >= 18) {
        $mensaje = "Mayor de edad";
    } else {
        $mensaje = "Menor de edad";
    }
} else {
    $mensaje = ""; // Inicializamos la variable para evitar errores al cargar la página por primera vez
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor o menor de edad</title>
</head>
<body>
    <form action="" method="post">
        <label for="edad">Digite su edad:</label>
        <input type="number" name="edad" id="edad" required>
        <input type="submit" value="Calcular">
    </form> 

    <h1><?php echo $mensaje; ?></h1>
</body>
</html>
