<?php
if (isset($_POST['numerosSuma']) && is_array($_POST['numerosSuma'])) {
    $numerosSuma = $_POST['numerosSuma'];
    $suma = 0;
 
    foreach ($numerosSuma as $numeroSuma) {
       if (is_numeric($numeroSuma)) {
           $suma += $numeroSuma;
       }
   }
 
   echo "<h1>Resultado de la Suma</h1>";
   echo "<p>La suma de los números es: $suma</p>";
} else {
    header('location: ej05.php');
}
?>