<!-- Sumar los 3 primeros números pares. -->
<?php
$total = 0;
$i = 1;
do {
    if (($i % 2 == 0) && ($total < 10)) {
        $total += $i;
    }
    $i += 1;
} while ($i < 10);
print $total;
?>
