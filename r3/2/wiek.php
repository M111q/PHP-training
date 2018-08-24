<?php
    function czyPelnoletni($data){
        $lata = date('Y') - $data['rok'];
        $miesiace = date('m') - $data['miesiac'];
 
        if ($lata > 18){
            echo 'jestes pelnoletni';
        }elseif($lata == 18 && $data['miesiac'] < date('m')){
            echo 'jestes pelnoletni';
        }elseif($lata == 18 && $data['miesiac'] == date('m') && $data['dzien'] <= date('d')){
            echo 'jestes pelnoletni';
        }else
            echo 'zakaz wjazdu';
    }
    $data['dzien'] = $_GET['dzien'];
    $data['miesiac'] = $_GET['miesiac'];
    $data['rok'] = $_GET['rok'];
    czyPelnoletni($data);
?>