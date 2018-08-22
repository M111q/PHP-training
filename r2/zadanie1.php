<html>
<!-- Napisz skrypt, który za pomocą dowolnie
wybranych pętli wypisze tabliczkę mnożenia z liczbami od 1 do
10;-->
<!-- zmodyfikuj tabliczkę mnożenia tak, żeby liczby
parzyste kolorowało na niebiesko, a nieparzyste na zielono; użyj
warunku if-->
    
    <body style="font-family: monospace ;">
        <?php
            for($i=1;$i<=10;$i++)
            {
                    for($y=1;$y<=10;$y++)
                    {   if ($y*$i < 10)//if w celu dopisania 0 przed cyframi
                            if ($y*$i%2==0)//sprawdzenie czy parzyste
                                echo "<span style='color:blue;'>0".$y*$i." </span>";
                            else 
                                echo "<span style='color:green;'>0".$y*$i." </span>";
                        else
                            if ($y*$i%2==0)//sprawdzenie czy parzyste
                                echo "<span style='color:blue;'>".$y*$i." </span>";
                            else 
                                echo "<span style='color:green;'>".$y*$i." </span>";
                    }
                echo "</br>";
            }
        ?>
    </body>
</html>