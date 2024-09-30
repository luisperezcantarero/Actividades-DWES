<!-- Modifica la página inicial realizada, incluyendo una imagen de cabecera en función
de la estación del año en la que nos encontremos y un color de fondo en función de
la hora del día. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <style>
        <?php
        $hour_now = Date("H");
        if ($hour_now < 18) {
            echo "body {background-color: #E3F2FD;}";
        } else {
            echo "body {background-color: #2C3E50;}";
        }
        ?>

        header {
          width: 100%;
          height: auto;
        }
    </style>
  <header>
    <h1>Luis Pérez Cantarero</h1>
    <?php
    $month = Date("n");
    $day = Date("d");

    switch ($month) {
      case 1:
      case 2:
        echo '<img src="img/invierno.jpeg" alt="Invierno">';
        break;
      case 3:
        if ($day >= 21) {
          echo '<img src="img/primavera.jpeg" alt="Primavera">';
        } else {
          echo '<img src="img/invierno.jpeg" alt="Invierno">';
        }
        break;
      case 4:
      case 5:
        echo '<img src="img/primavera.jpeg" alt="Primavera">';
        break;
      case 6:
        if ($day >= 21) {
          echo '<img src="img/verano.png" alt="Verano">';
        } else {
          echo '<img src="img/primavera.jpeg" alt="Primavera">';
        }
        break;
      case 7:
      case 8:
        echo '<img src="img/verano.png" alt="Verano">';
        break;
      case 9:
        if ($day >= 21) {
          echo '<img src="img/otonio.jpg" alt="Otoño">';
        } else {
          echo '<img src="img/verano.png" alt="Verano">';
        }
        break;
      case 10:
      case 11:
        echo '<img src="img/otonio.jpg" alt="Otoño">';
        break;
      case 12:
        if ($day >= 21) {
          echo '<img src="img/invierno.jpeg" alt="Invierno">';
        } else {
          echo '<img src="img/otonio.jpg" alt="Otoño">';
        }
        break;
      default;
        break;
    }
    ?>
  </header>
  <section>
    <p>Edad: 19 años</p>
    <p>Curso actual: 2º Grado Superior de Desarrollo de Aplicaciones Web en el IES Gran Capitán 24/25</p>
    <p>Formación: Bachillerato de Ciencias y Tecnología</p>
  </section>
</body>
</html>
