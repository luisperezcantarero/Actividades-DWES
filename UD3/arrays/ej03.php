<?php
/**
 * Crear un array con los alumnos de clase y permitir la selección aleatoria de uno de 
 * ellos. El resultado debe mostrar nombre y fotografía.
 * 
 * 
 * @author = Luis Pérez
 */

 $alumnos = array(
    array("nombre" => "Bermúdez González, Raúl", "imagen" => "raul.PNG"),
    array("nombre" => "Borreguero Redondo, Carlos", "imagen" => "borreguero.PNG"),
    array("nombre" => "Cañas González, Álvaro", "imagen" => "alvaro.PNG"),
    array("nombre" => "Carmona Cicchetti, Miguel", "imagen" => "miguel.PNG"),
    array("nombre" => "Carrasco Castellano, Alejandro", "imagen" => "carrasco.PNG"),
    array("nombre" => "Cherif Mouaki Almabouada, Mostafa", "imagen" => "mostafa.PNG"),
    array("nombre" => "Coronado Ortega, Alejandro", "imagen" => "coronado.PNG"),
    array("nombre" => "Delgado Morente, Juan Diego", "imagen" => "juandi.PNG"),
    array("nombre" => "Escoto García, Marlon Jafet", "imagen" => "marlon.PNG"),
    array("nombre" => "Fernández Ariza, Ángel", "imagen" => "angel.PNG"),
    array("nombre" => "Fernández Balsera, Daniel", "imagen" => "daniel.PNG"),
    array("nombre" => "Ferrer López, Jesús", "imagen" => "ferrer.PNG"),
    array("nombre" => "Frías Rojas, Jesús", "imagen" => "frias.PNG"),
    array("nombre" => "Galán Navas, Manuel", "imagen" => "manuel.PNG"),
    array("nombre" => "García Báez, Victor", "imagen" => "victor.PNG"),
    array("nombre" => "García Díaz, Lucía", "imagen" => "lucia.PNG"),
    array("nombre" => "González Martínez, Adrián", "imagen" => "adrian.PNG"),
    array("nombre" => "Mariño Jiménez, Enrique", "imagen" => "kike.PNG"),
    array("nombre" => "Martín-Castaño Carrillo, Oscar", "imagen" => "oscar.PNG"),
    array("nombre" => "Mayén Pérez, Jose Mária", "imagen" => "josema.PNG"),
    array("nombre" => "Mérida Velasco, Pablo", "imagen" => "pablo.PNG"),
    array("nombre" => "Mora Sánchez, Héctor", "imagen" => "hector.PNG"),
    array("nombre" => "Pérez Cantarero, Luis", "imagen" => "yo.jpg"),
    array("nombre" => "Romero Romero, Carlos", "imagen" => "carlos.PNG"),
    array("nombre" => "Ruiz Molero, Javier", "imagen" => "javier.PNG"),
    array("nombre" => "Vaquero Abad, Alejandro", "imagen" => "vaquero.PNG"),
    array("nombre" => "Villén Moyano, Luis Miguel", "imagen" => "luismi.PNG"),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <style>
        img {
        width: 150px;
        border-radius: 20%;
        display: block;
        margin-bottom: 20px;
        margin-left: auto;
        margin-right: auto;
        }
        p {
            text-align: center;
        }
    </style>
    <?php
    $randomStudent = array_rand($alumnos);
    $alumnoSelect = $alumnos[$randomStudent];
    echo '<p>'.$alumnoSelect['nombre'].'</p>';
    echo '<img src="imgs/'.$alumnoSelect['imagen'].'" alt="'.$alumnoSelect['imagen'].'">';
    ?>
</body>
</html>