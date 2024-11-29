<?php include("cabecera.php"); ?>

    
    <?php
    if ($_POST){
        $n1 = $_POST["n1"];
        $v2 = $_POST["v2"];
        $sum = $n1 + $v2;
    }
        echo "<h1> Hola mundo </h1>";
        echo "<h3> Natalia Del Pilar Garcia Oviedo</h3>";
    ?>
    <form action= "" method = "post">
        <label for="">Digite primer numero</label>
        <input type="number" name="n1" id="n1"> <br><br>
        <label for="">Digite segundo numero</label>
        <input type="number" name="v2" id="v2"> <br><br>
        <input type="submit" value="Sumar">
    </form>

    <input tyoe ="text" name="" id="" value="<?php echo $sum; ?>">


    <?php
    echo "<h1> Calculadora de Promedio </h1>";
    echo "<h3> Natalia Del Pilar Garcia Oviedo</h3>";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capturar los valores enviados por el formulario
        $num1 = $_POST["numero1"];
        $num2 = $_POST["numero2"];
        $num3 = $_POST["numero3"];

        // Calcular el promedio
        $promedio = ($num1 + $num2 + $num3) / 3;        
    }

    ?>
    <form action="" method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1" step="any" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2" step="any" required><br><br>

        <label for="numero3">Número 3:</label>
        <input type="number" name="numero3" id="numero3" step="any" required><br><br>

        <button type="submit">Calcular Promedio</button><br><br>
    </form>
    
    <input type="text" name="resultado" id="resultado" readonly value="<?php echo isset($promedio) ? "El promedio de $num1, $num2 y $num3 es: " . number_format($promedio, 2) : ''; ?>">

<?php include("pie.php"); ?>