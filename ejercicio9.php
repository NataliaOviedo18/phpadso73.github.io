<?php include("cabecera.php"); ?>

<?php
if ($_POST) {
    // Obtener las notas ingresadas por el usuario
    $taller1 = $_POST["taller1"];
    $taller2 = $_POST["taller2"];
    $quiz = $_POST["quiz"];
    $examen = $_POST["examen"];

    // Calcular el promedio de los talleres y quiz
    $nota_talleres_quiz = ($taller1 + $taller2 + $quiz) / 3;

    // Calcular las ponderaciones
    $nota_talleres_quiz_ponderada = $nota_talleres_quiz * 0.30;
    $nota_examen_ponderada = $examen * 0.70;

    // Calcular la nota final
    $nota_final = $nota_talleres_quiz_ponderada + $nota_examen_ponderada;
}
?>


    <h1>Calcular Nota del Primer Parcial</h1>
    <form action="" method="post">
        <label for="taller1">Nota del primer taller (0-10):</label>
        <input type="number" name="taller1" id="taller1" required min="0" max="10"><br>

        <label for="taller2">Nota del segundo taller (0-10):</label>
        <input type="number" name="taller2" id="taller2" required min="0" max="10"><br>

        <label for="quiz">Nota del quiz (0-10):</label>
        <input type="number" name="quiz" id="quiz" required min="0" max="10"><br>

        <label for="examen">Nota del examen parcial (0-10):</label>
        <input type="number" name="examen" id="examen" required min="0" max="10"><br>

        <input type="submit" value="Calcular Nota">
    </form>

    <?php
    if ($_POST) {
        echo "<h2>Resultado</h2>";
        echo "La nota final del primer parcial es: " . number_format($nota_final, 2);
    }
    ?>


<?php include("pie.php"); ?>