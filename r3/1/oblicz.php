<?php
function wypisz_dzien_tygodnia($data)
{
$day = date("w", mktime (0,0,0,$data['miesiac'],
$data['dzien'], $data['rok']));
    switch($day){
        case 1:
            echo "Poniedziałek";
            break;
        case 2:
            echo "Wtorek";
            break;
        case 3:
            echo "Środa";
            break;
        case 4:
            echo "Czwartek";
            break;
        case 5:
            echo "Piątek";
            break;
        case 6:
            echo "Sobota";
            break;
        case 0:
            echo "Niedziela";
            break;
    }
}
function oblicz_dni($data)
{
// 60 sekund to 1 minuta, 60 minut to 1 godzina,
// 24 godziny to 1 dzień
$czas = (time() - mktime (0,0,0,$data['miesiac'],
$data['dzien'],$data['rok']))/60/60/24;
return $czas;
}
$data['dzien'] = $_GET['dzien'];
$data['miesiac'] = $_GET['miesiac'];
$data['rok'] = $_GET['rok'];
wypisz_dzien_tygodnia($data);
echo "</br>".oblicz_dni($data);
?>