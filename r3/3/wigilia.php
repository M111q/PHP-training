<?php
/* Stwórz funkcję, która zapisze do tablicy dni
tygodnia dziesięciu kolejnych Kolacji Wigilijnych (24.12), a
następnie zwróci tę tablicę. */

$data['day'] = 24;
$data['month'] = 12;
$data['year'] = date('Y');

//liczba wigilii do wpisania w tablice
$ileKolacji = 10;

for ($i=0; $i<$ileKolacji ;$i++){
    $day = date("l", mktime (0,0,0,$data['month'], $data['day'], $data['year']));
    $result[$i] = $day;
    $data['year'] += 1;
}
//wypisuje wartosci z tablicy
for($x = 0; $x < count($result);$x++)
    echo $result[$x]."</br>";

?>