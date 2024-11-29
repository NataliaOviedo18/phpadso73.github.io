<?php include("cabecera.php"); ?>
<?php
// Definir constantes
define("TARIFA_HORA", 30000);
define("TOTAL_OBREROS", 50);

if ($_POST) {
    $horas_trabajadas = $_POST["horas_trabajadas"];
    $salarios = [];
    $nomina_total = 0;

    // Calcular salarios para los obreros
    for ($i = 0; $i < TOTAL_OBREROS; $i++) {
        // Obtener las horas trabajadas por cada obrero
        $horas = $horas_trabajadas[$i];

        // Calcular el salario
        $salario = $horas * TARIFA_HORA;

        // Almacenar el salario en el arreglo
        $salarios[] = $salario;

        // Sumar al total de la nómina
        $nomina_total += $salario;
    }
}
?>


    <h1>Cálculo de Nómina para 50 Obreros</h1>
    <form action="" method="post">
        <?php for ($i = 1; $i <= TOTAL_OBREROS; $i++): ?>
            <label for="horas_trabajadas_<?= $i ?>">Ingrese las horas trabajadas por el obrero <?= $i ?>:</label>
            <input type="number" name="horas_trabajadas[]" id="horas_trabajadas_<?= $i ?>" required>
            <br><br>
        <?php endfor; ?>
        <input type="submit" value="Calcular Nómina">
    </form>

    <?php if ($_POST): ?>
        <h2>Resultados:</h2>
        <p><strong>Salarios individuales:</strong></p>
        <ul>
            <?php foreach ($salarios as $index => $salario): ?>
                <li>Obrero <?= $index + 1 ?>: <?= number_format($salario, 2, ',', '.') ?> Bolívares</li>
            <?php endforeach; ?>
        </ul>
        <p><strong>Nómina total:</strong> <?= number_format($nomina_total, 2, ',', '.') ?> Bolívares</p>
    <?php endif; ?>
    
<?php include("pie.php"); ?>
