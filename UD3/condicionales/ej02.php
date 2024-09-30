<!-- Carga en variables mes y año e indica el número de días del mes. Utiliza la
estructura de control switch -->
<?php
$month = 2;
$y = 2024;

switch ($month) {
    case 1:
    case 3:
    case 4:
    case 7:
    case 8:
    case 10:
    case 12:
        $n = 31;
        break;
    case 5:
    case 6:
    case 9:
    case 11:
        $n = 30;
        break;
    case 2:
        if($y % 4 == 0 && ($y % 100 != 0 || $y % 400 ==0)) {
            $n = 29;
        } else {
            $n = 28;
        }
        break;
    default;
        echo "Més incorrecto";
}
echo "El més $month/$y tiene $n días"
?>
