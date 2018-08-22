<?php

// przypisanie zmiennych formularza
$kwota_zaplacona = $_POST['kwota'];
$kwota_zamowienia = $_POST['kwota_zamowienia'];
$reszta = $kwota_zaplacona - $kwota_zamowienia;
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Wynik zapłaty</title>
		<link href="style.css" rel="stylesheet" />
	</head>
	<body>
        <div id="container">
            <h1>Podsumowanie zakupów</h1>
            <?php
            echo "<p>Kwota do zapłaty: ".$kwota_zamowienia."<br/>";
            echo "Wpłacono: ".
            $kwota_zaplacona."<br/>";
            echo "Reszta do wydania: ".
            $reszta."<br/></p>";
            ?>
        </div>
	</body>
</html>