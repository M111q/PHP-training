<?php
$ilosc = 25; // przypisujemy dowolną wartość zmiennej $ilosc
// zmienna $kontynuacja sprawdza, czy $ilosc jest zerem
$kontynuacja = ($ilosc == 0) ? 0 : 1;
// jeśli nie jest, możemy kontynuować
if($kontynuacja == 1)
{
if($ilosc > 0) // wyświetlamy ciągi od 0 do 20
while($ilosc > 0) // musimy wypisać $ilosc ciągów
{
for($i=0;$i<21;$i++) // od 0 do 20 za pomocą for
echo $i;
$ilosc--; // zmniejszamy, aż dojdzie do 0
echo "<br/>"; // przejście do kolejnej linijki
}
else // $ilosc jest ujemna, wyswietlamy od 20 do 0
while($ilosc < 0) // wypisujemy -$ilosc ciągów
{
for($i=20;$i>=0;$i--) // 20 do 0 za pomocą for
echo $i;
$ilosc++; // zwiększamy, aż dojdzie do 0
echo "<br/>"; // przejście do kolejnej linijki
}
}
else // jeśli kontynuacja wynosi 0
echo "Brak ciągów liczb";
?>