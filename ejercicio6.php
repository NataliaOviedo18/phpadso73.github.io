<?php include("cabecera.php"); ?>
<?php
if ($_POST) {
    // Capturar los valores ingresados por el usuario
    $a = $_POST["valor_a"];
    $b = $_POST["valor_b"];
    $c = $_POST["valor_c"];

    // Determinar el menor
    if ($a < $b && $a < $c) {
        $menor = $a;
    } elseif ($b < $a && $b < $c) {
        $menor = $b;
    } else {
        $menor = $c;
    }

    // Construir el mensaje de salida
    $mensaje = "El menor es: $menor";
}
?>


    <h1>Determinar el menor de tres valores</h1>
    <form action="" method="post">
        <label for="valor_a">Ingrese el valor de A:</label>
        <input type="number" name="valor_a" id="valor_a" required>
        <br><br>

        <label for="valor_b">Ingrese el valor de B:</label>
        <input type="number" name="valor_b" id="valor_b" required>
        <br><br>

        <label for="valor_c">Ingrese el valor de C:</label>
        <input type="number" name="valor_c" id="valor_c" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

    <h1>Resultados:</h1>
    <p>
        <?php 
        // Mostrar el mensaje de resultados
        if (isset($mensaje)) {
            echo $mensaje; 
        }
        ?>
    </p>

<?php include("pie.php"); ?>
