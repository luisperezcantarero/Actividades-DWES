<?php
/**
 * Crear una aplicación que almacene información de países: nombre capital y
 * bandera. Diseñar un formulario que permita seleccionar un país y nos muestre el
 * nombre de la capital y la bandera.
 * 
 * @author Luis Pérez
 */

 include './conf/conf-ej4.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Información de Países</h1>
    <form action="procesa_ej04.php" method="post">
        <label for="pais">Selecciona un país</label>
        <select name="pais" id="pais">
            <?php
            foreach ($paises as $pais) {
                echo '<option value='. $pais['nombre'] . '>' . $pais['nombre'] . '</option>';
            }
            ?>
        </select>
        <br/><br/>
        <input type="submit" name="enviar" value="Enviar"/>
    </form>
</body>
</html>