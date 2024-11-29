<?php include("cabecera.php"); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcion = $_POST['opcion'];

    switch ($opcion) {
        case 1: // Círculo
            $radio = $_POST['radio'];
            $area = pi() * $radio * $radio;
            $resultado = "El área del círculo es: " . $area;
            break;
        
        case 2: // Cuadrado
            $lado = $_POST['lado'];
            $area = $lado * $lado;
            $resultado = "El área del cuadrado es: " . $area;
            break;
        
        case 3: // Triángulo
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            $area = ($base * $altura) / 2;
            $resultado = "El área del triángulo es: " . $area;
            break;
        
        default:
            $resultado = "Opción inválida.";
            break;
    }
}
?>


    <h1>Seleccione una figura geométrica para calcular su área</h1>
    <form method="POST">
        <label for="opcion">Seleccione la figura:</label>
        <select name="opcion" id="opcion">
            <option value="1">Círculo</option>
            <option value="2">Cuadrado</option>
            <option value="3">Triángulo</option>
        </select>
        <br><br>

        <!-- Dependiendo de la figura seleccionada, mostramos los campos correspondientes -->
        <div id="formulario">
            <div id="circulo">
                <label for="radio">Ingrese el radio del círculo:</label>
                <input type="number" name="radio" id="radio">
            </div>
            <div id="cuadrado">
                <label for="lado">Ingrese el lado del cuadrado:</label>
                <input type="number" name="lado" id="lado">
            </div>
            <div id="triangulo">
                <label for="base">Ingrese la base del triángulo:</label>
                <input type="number" name="base" id="base">
                <br>
                <label for="altura">Ingrese la altura del triángulo:</label>
                <input type="number" name="altura" id="altura">
            </div>
        </div>
        <br>
        <input type="submit" value="Calcular Área">
    </form>

    <h2>Resultado:</h2>
    <?php if (isset($resultado)) { echo $resultado; } ?>
<?php include("pie.php"); ?>
