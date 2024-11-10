<?php
/**
 * Formulario para crear un currículum que incluya: Campos de texto, grupo de
 * botones de opción, casilla de verificación, lista de selección única, lista de
 * selección múltiple, botón de validación, botón de imagen, botón de reset, etc.
 * 
 * @author Luis Pérez
 */
if (isset($_POST['nombre'], $_POST['email'], $_POST['genero'], $_POST['educacion'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $transporte = isset($_POST['transporte']) ? "Sí" : "No";
    $educacion = $_POST['educacion'];
    $habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : [];

    echo "<h2>Curriculum</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Género: $genero</p>";
    echo "<p>Transporte: $transporte</p>";
    echo "<p>Educación: $educacion</p>";
    
    echo "<p>Habilidades: ";
    if (count($habilidades) > 0) {
        foreach ($habilidades as $habilidad) {
            echo "$habilidad ";
        }
    } else {
        echo "No se seleccionaron habilidades";
    }
    echo "</p>";
}
?>