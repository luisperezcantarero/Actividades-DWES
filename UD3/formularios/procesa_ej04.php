<?php
include './conf/conf-ej4.php';

if (!isset($_POST['enviar'])) {
    header('location: ej04.php');
} else {
    $paisSelect = $_POST['pais'];
    $paisInfo = "";

    foreach ($paises as $pais) {
        if ($paisSelect === $pais['nombre']) {
            $paisInfo = $pais;
            break;
        }
    }

    echo "<h1>País seleccionado:</h1>";
    echo "<p>Nombre: " . $pais['nombre'] . "</p>";
    echo "<p>Capital: " . $pais['capital'] . "</p>";
    echo "<p>Bandera: " . $pais['bandera'] . "</p>";
}
?>