<!-- Modifica la página inicial realizada, incluyendo una imagen de cabecera en función
de la estación del año en la que nos encontremos y un color de fondo en función de
la hora del día. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
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
  </header>
  <section>
    <ul>
    <?php
      $perfil = "usuario";

      if ($perfil == "administrador") {
        echo "<li><a href='ej01.php'>Página 1</a></li>";
        echo "<li><a href='ej02.php'>Página 2</a></li>";
        echo "<li><a href='ej03.php'>Página 3</a></li>";
        echo "<li><a href='ej04.php'>Página 4</a></li>";
      } else {
        echo "<li><a href='ej01.php'>Página 1</a></li>";
        echo "<li><a href='ej02.php'>Página 2</a></li>";
      }
    ?>
    </ul>
  </section>
</body>
</html>
