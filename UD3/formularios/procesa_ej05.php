<?php
/**
 * Crear un script para sumar una serie de números.
 * El número de números a sumar será introducido en un formulario.
 * 
 * @author Luis Pérez
 */

 if (isset($_POST['numeros'])) {
    $numero = $_POST['numeros'];
    
    echo "<h1>Suma de Números</h1>";
    echo "<form action='procesa_suma.php' method='post'>";
    echo "<input type='hidden' name='numeros' id='numeros'>";
    for ($i = 1; $i <= $numero; $i++) {
       echo "<label for='numero$i'>Número $i</label>";
       echo "<input type='number' name='numerosSuma[]' id='numerosSuma' required><br><br>";
      }
      echo "<br/><br/>";
      echo "<input type='submit' value='Sumar'>";
      echo "</form>";
   } else {
    header('location: ej05.php');
 }
?>