<!-- Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor
hexadecimal que le corresponde. Cada celda será un enlace a una página que
mostrará un fondo de pantalla con el color seleccionado. ¿Puedes hacerlo con los
conocimientos que tienes? -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
<style>
    h1 {
        text-align: center;
    }
    table {
        width: 100%;
    }
    td {
        width: 50px;
        height: 50px;
        text-align: center;
        font-size: 12px;
        color: white;
        border: 1px solid #000;
    }
    </style>
    <header>
        <h1>Paleta de colores</h1>
    </header>
    <table>
        <?php
        $contador = 0;

        echo "<tr>";
        for ($i = 0; $i <= 255; $i += 32) {
            for ($j = 0; $j <= 255; $j += 32) {
                for ($k = 0; $k <= 255; $k += 32) {
                    $color = sprintf("#%02x%02x%02x", $i, $j, $k);
                    echo "<td style='background-color: $color;'><a href='' style='color:white;'>$color</a></td>";

                    $contador++;

                    if ($contador == 5) {
                        echo "</tr>";
                        $contador = 0;
                    }
                }
            }
        }
        ?>
    </table>
</body>
</html>