<?php include("cabecera.php"); ?>

<?php
if ($_POST) {
    // Obtener el número ingresado por el usuario
    $numero = $_POST["numero"];

    // Verificar si el número está en el rango de 1 a 10
    if ($numero >= 1 && $numero <= 10) {
        echo "<h2>Tabla de multiplicar del número $numero:</h2>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado <br>";
        }
    } else {
        echo "<h2>El número ingresado no está en el rango válido (1-10).</h2>";
    }
}
?>


    <h1>Ingrese un número entre 1 y 10 para mostrar su tabla de multiplicar</h1>
    <form action="" method="post">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" min="1" max="10" required>
        <input type="submit" value="Mostrar Tabla">
    </form>



<?php include("cabecera.php"); ?>