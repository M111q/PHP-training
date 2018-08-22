<html>
<!-- KURS PHP I MYSQL KURSPHP.COM
wykorzystując instrukcję warunkową switch, napisz
skrypt, który w zależności od wartości zmiennej (2, 3, 4)
wyświetli ciąg dziesięciu kolejnych liczb podniesionych do
potęgi o wartości zmiennej (2, 3, 4); skorzystaj z wiedzy, że x^3
to inaczej x*x*x (analogicznie x^2 i x^4).
KURS-->
    <body style="font-family: monospace ;">
        <?php
        $x = 4;
        switch($x)
        {
        case 2:
            for($i=1;$i<=10;$i++)
                echo pow($i,2)." ";
            break;
        case 3:
            for($i=1;$i<=10;$i++)
                echo pow($i,3)." ";
            break;
        case 4:
            for($i=1;$i<=10;$i++)
                echo pow($i,4)." ";
            break;
        }
        ?>
    </body>
</html>