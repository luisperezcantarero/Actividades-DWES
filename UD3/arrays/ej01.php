<?php
/**
 * Definir un array que permita almacenar y mostrar la siguiente información. 
 * a. Meses del año.
 * b. Tablero para jugar al juego de los barcos.
 * c. Nota de los alumnos de 2o DAW para el módulo DWES.
 * d. Verbos irregulares en inglés.
 * e. Información sobre continentes, países, capitales y banderas.
 * 
 * @author = Luis Pérez
 */

 $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
 $mesesCount = count($meses);
 for($i = 0; $i < $mesesCount; $i++) {
    echo $meses[$i];
    echo "<br>";
 }

 $tableroBarcos = array("A" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
                        "B" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
                        "C" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
                        "D" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
                        "E" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
                        "F" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
                        "G" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
                        "H" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
                        "I" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
                        "J" => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)
);
 
echo "<br>Tablero de Barcos<br>";
$coordenadas = array();
foreach ($tableroBarcos as $coordenada) {
    $coordenadas = $coordenada;
    print_r($coordenadas);
    echo "<br>";
}

echo "<br>Nota Alumnos<br>";
$notaAlumnos = array( array("nombre" => "Luis", "nota" => 4), array("nombre" => "Jose María", "nota" => 7), array("nombre" => "Carlos", "nota" => 7), array("nombre" => "Marlon", "nota" => 8));
$notaFinal = array();
foreach ($notaAlumnos as $nota) {
    $notaFinal[] = $nota["nota"];
}
print_r($notaFinal);
echo "<br>";

$verbosIrregulares = array( array("Base Form" => array("arise", "get", "shut"), "Past Form" => array("arose", "got", "shut"), "Past Participle" => array("arise", "got", "shut")));

$informacionPais = array("Europa" => array("España" => array("Madrid", "Rojigualda")),
                        "Asia" => array("Rusia" => array("Moscu", "Флаг России")),
                        "Oceania" => array("Australia" => array("Canberra", "Commonwealth Star")), 
                        "América" => array("Estados Unidos" => array("Washintong DC", "Stars and Stripes")), 
                        "África" => array("Marruecos" => array("Rabat", "Roja con estrella en medio")));
?>