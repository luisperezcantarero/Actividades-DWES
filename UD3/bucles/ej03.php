<!-- Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <style>
        table {
            text-align: center;
        }
    </style>
    <header>
        <h1>Ejercicio 3</h1>
    </header>
    <div>
        <table>
            <th>| Numero 1 |</th>
            <th>| Numero 2 |</th>
            <th>| Resultado |</th>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                for ($j = 1; $j <= 10; $j++) {
                    $result = $i * $j;
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>$j</td>";
                    echo "<td>$result</td>";
                    echo "</tr>";
                }
            }
        ?>
        </table>
    </div>
</body>
</html>
