<?php
/**
 * Un restaurante dispone de una carta de 3 primeros, 5 segundos y 3 postres. 
 * Almacenar información incluyendo foto y mostrar los menús disponibles. Mostrar el
 * precio del menú suponiendo que éste se calcula sumando el precio de cada uno de
 * los platos incluidos y con un descuento del 20 %.
 * 
 * @author = Luis Pérez
 */

 $primeros = array(
    array("nombre" => "Salmorejo", "precio" => 5.50, "imagen" => "imgs/salmorejo.jpg"),
    array("nombre" => "Gazpacho", "precio" => 4.75, "imagen" => "imgs/gazpacho.jpg"),
    array("nombre" => "Sopa de verduras", "precio" => 4.5, "imagen" => "imgs/sopa_verduras.jpg")
 );
 $segundos = array(
    array("nombre" => "Carrillada", "precio" => 18.95, "imagen" => "imgs/carrillada.jpg"),
    array("nombre" => "Paella", "precio" => 16.50, "imagen" => "imgs/paella.jpg"),
    array("nombre" => "Flamenquin", "precio" => 14.50, "imagen" => "imgs/flamenquin.jpg"),
    array("nombre" => "Merluza a la Plancha", "precio" => 12.00, "imagen" => "imgs/merluza.jpg"),
    array("nombre" => "Cachopo", "precio" => 11.75, "imagen" => "imgs/cachopo.jpg")
 );
 $postres = array(
    array("nombre" => "Tarta de queso", "precio" => 4.00, "imagen" => "imgs/tarta.jpg"),
    array("nombre" => "Torrijas", "precio" => 3.50, "imagen" => "imgs/torrijas.jpg"),
    array("nombre" => "Helado", "precio" => 3.00, "imagen" => "imgs/helado.jpg")
 );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <style>
        img {
            width: 250px;
            height: 250px;
        }
    </style>
    <h1>Menú del día</h1>
    <?php
    foreach ($primeros as $primero) {
        foreach ($segundos as $segundo) {
            foreach ($postres as $postre) {
                echo "<div>";
                echo "<h3>{$primero['nombre']}</h3>";
                echo "<img src='{$primero['imagen']}'/>";
                echo "<p>Precio: {$primero['precio']}€</p>";
                echo "</div>";

                echo "<div>";
                echo "<h3>{$segundo['nombre']}</h3>";
                echo "<img src='{$segundo['imagen']}'/>";
                echo "<p>Precio: {$segundo['precio']}€</p>";
                echo "</div>";

                echo "<div>";
                echo "<h3>{$postre['nombre']}</h3>";
                echo "<img src='{$postre['imagen']}'/>";
                echo "<p>Precio: {$postre['precio']}€</p>";
                echo "</div>";

                $precioTotal = $primero['precio'] + $segundo['precio'] + $postre['precio'];
                $descuento = $precioTotal * 0.20;

                echo "Descuento: $descuento € <br>";
                echo 'Precio total: ' . $precioTotal - $descuento . '€';
            }
        }
    }
    ?>
</body>
</html>