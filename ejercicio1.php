<?php include("cabecera.php"); ?>
<?php
if ($_POST) {
    $edad1 = $_POST["edad1"];
    $edad2 = $_POST["edad2"];

    if ($edad1 > $edad2) {
        $mayor = $edad1;
        $menor = $edad2;
        $diferencia = $mayor - $menor;
        $mensaje = "El hermano mayor tiene $mayor años. La diferencia de edad es de $diferencia años.";
    } elseif ($edad2 > $edad1) {
        $mayor = $edad2;
        $menor = $edad1;
        $diferencia = $mayor - $menor;
        $mensaje = "El hermano mayor tiene $mayor años. La diferencia de edad es de $diferencia años.";
    } else {
        $mensaje = "Ambos hermanos tienen la misma edad.";
    }
}
?>


    <h1>Ingrese las edades de los dos hermanos</h1>
    <form action="" method="post">
        <label for="edad1">Edad del primer hermano:</label>
        <input type="number" name="edad1" id="edad1" required>
        <br><br>
        <label for="edad2">Edad del segundo hermano:</label>
        <input type="number" name="edad2" id="edad2" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form> 
    
    <h1><?php if (isset($mensaje)) echo $mensaje; ?></h1>

    <?php include("pie.php"); ?>