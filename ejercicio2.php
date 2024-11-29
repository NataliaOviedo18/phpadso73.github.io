<?php include("cabecera.php"); ?>
<?php
if ($_POST) {
    // Obtener el número enviado por el formulario
    $numero = $_POST["numero"];

    // Calcular el doble y el triple
    $doble = $numero * 2;
    $triple = $numero * 3;

    // Preparar el mensaje para mostrar
    $mensaje = "El doble de $numero es $doble. El triple de $numero es $triple.";
}
?>

    <h1>Calcular el doble y el triple de un número</h1>
    <form action="" method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" id="numero" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <h1>
        <?php 
        // Mostrar el mensaje con el resultado
        if (isset($mensaje)) {
            echo $mensaje; 
        }
        ?>
    </h1>
<?php include("pie.php"); ?>