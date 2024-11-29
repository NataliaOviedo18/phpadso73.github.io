<?php include("cabecera.php"); ?>
<?php
if ($_POST) {
    // Capturar datos del formulario
    $nombre_cliente = $_POST["nombre"];
    $cantidad_sandalias = $_POST["cantidad_sandalias"];
    $costo_sandalias = $_POST["costo_sandalias"];
    $cantidad_tenis = $_POST["cantidad_tenis"];
    $costo_tenis = $_POST["costo_tenis"];
    $cantidad_mocasines = $_POST["cantidad_mocasines"];
    $costo_mocasines = $_POST["costo_mocasines"];

    // Constantes
    $ganancia = 0.55;
    $descuento = 0.08;
    $iva = 0.19;

    // Calcular el valor de venta sin descuento
    $valor_sandalias = $cantidad_sandalias * $costo_sandalias * (1 + $ganancia);
    $valor_tenis = $cantidad_tenis * $costo_tenis * (1 + $ganancia);
    $valor_mocasines = $cantidad_mocasines * $costo_mocasines * (1 + $ganancia);
    $valor_venta_sin_descuento = $valor_sandalias + $valor_tenis + $valor_mocasines;

    // Calcular el descuento
    $valor_descuento = $valor_venta_sin_descuento * $descuento;

    // Calcular el valor con descuento
    $valor_con_descuento = $valor_venta_sin_descuento - $valor_descuento;

    // Calcular la venta neta final (incluyendo IVA)
    $valor_neto_final = $valor_con_descuento * (1 + $iva);

    // Mensaje de resultados
    $mensaje = "Cliente: $nombre_cliente<br>";
    $mensaje .= "Valor de la venta sin descuento: $" . number_format($valor_venta_sin_descuento, 2) . "<br>";
    $mensaje .= "Descuento aplicado: $" . number_format($valor_descuento, 2) . "<br>";
    $mensaje .= "Valor de la venta con descuento: $" . number_format($valor_con_descuento, 2) . "<br>";
    $mensaje .= "Valor neto final (incluyendo IVA): $" . number_format($valor_neto_final, 2);
}
?>


    <h1>Calcular la venta de zapatos</h1>
    <form action="" method="post">
        <label for="nombre">Nombre del cliente:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>

        <h2>Sandalias</h2>
        <label for="cantidad_sandalias">Cantidad:</label>
        <input type="number" name="cantidad_sandalias" id="cantidad_sandalias" required>
        <br>
        <label for="costo_sandalias">Costo unitario:</label>
        <input type="number" name="costo_sandalias" id="costo_sandalias" required>
        <br><br>

        <h2>Tenis</h2>
        <label for="cantidad_tenis">Cantidad:</label>
        <input type="number" name="cantidad_tenis" id="cantidad_tenis" required>
        <br>
        <label for="costo_tenis">Costo unitario:</label>
        <input type="number" name="costo_tenis" id="costo_tenis" required>
        <br><br>

        <h2>Mocasines</h2>
        <label for="cantidad_mocasines">Cantidad:</label>
        <input type="number" name="cantidad_mocasines" id="cantidad_mocasines" required>
        <br>
        <label for="costo_mocasines">Costo unitario:</label>
        <input type="number" name="costo_mocasines" id="costo_mocasines" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

    <h1>Resultados:</h1>
    <p>
        <?php 
        // Mostrar el mensaje con los resultados
        if (isset($mensaje)) {
            echo $mensaje; 
        }
        ?>
    </p>
<?php include("pie.php"); ?>
