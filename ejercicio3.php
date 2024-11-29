<?php include("cabecera.php"); ?>

<?php
if ($_POST) {
    $nota = $_POST["nota"];
    if (($nota >= 1) and ($nota<=9)) {
        $mensaje = "E";
    } elseif (($nota >= 10) and ($nota<=12)){
        $mensaje = "D";
    } elseif (($nota >= 13) and ($nota<=15)){
        $mensaje = "C";
    }
    else
    $mensaje= "Numero errado, fuera de rango";
} 

?>

<h1> El numero de nota a ingreas debe estar entre el 1 al 20 </h1>
    <form action="" method="post">
        <label for="edad">Digite la nota:</label>
        <input type="number" name="nota" id="nota">
        <input type="submit" value="Calcular">
    </form> 
    
    <h1><?php echo $mensaje; ?></h1>

<?php include("pie.php"); ?>