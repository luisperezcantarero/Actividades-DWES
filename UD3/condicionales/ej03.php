<!-- Carga fecha de nacimiento en variables y calcula la edad. -->
<?php
    $day_born = 25;
    $month_born = 9;
    $year_born = 2005;

    $day_now = date("d");
    $month_now = date("n");
    $year_now = date("Y");

    $age = $year_now - $year_born;

    if ($month_born > $month_now || ($month_born == $month_now && $day_born > $day_now)) {
        $age -= 1;
    }
    
    echo "La edad de la persona es: ${age}";
?>
