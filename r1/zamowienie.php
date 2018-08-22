<?php


define("KOSZULKA", 14.99); // cena koszulki jako stała
define("SPODNIE", 45.99); // cena spodni
define("CZAPKA", 9.63); // cena czapki
define("P_VAT", 0.23); // wysokość podatku VAT

// dodatkowy artykul stała buty
define("BUTY", 99.99);

// przypisanie zmiennych formularza
$ile_koszulki = $_POST['koszulki'];
$ile_spodnie = $_POST['spodnie'];
$ile_czapki = $_POST['czapki'];

$ile_buty = $_POST['buty'];

// wartość netto zamówionych przedmiotów
$kwota_koszulki_netto = $ile_koszulki * KOSZULKA;
$kwota_spodnie_netto = $ile_spodnie * SPODNIE;
$kwota_czapki_netto = $ile_czapki * CZAPKA;

$kwota_buty_netto = $ile_buty * BUTY;

// cena netto całego zamówienia
$kwota_zamowienia_netto = $kwota_koszulki_netto +
$kwota_spodnie_netto + $kwota_czapki_netto + $kwota_buty_netto;
// wartości brutto
$kwota_koszulki_brutto = $kwota_koszulki_netto +
$kwota_koszulki_netto * P_VAT;
$kwota_spodnie_brutto = $kwota_spodnie_netto +
$kwota_spodnie_netto * P_VAT;
$kwota_czapki_brutto = $kwota_czapki_netto +
$kwota_czapki_netto * P_VAT;

$kwota_buty_brutto = $kwota_buty_netto + $kwota_buty_netto * P_VAT;

// cena zamówienia brutto
$kwota_zamowienia_brutto = $kwota_koszulki_brutto +
$kwota_spodnie_brutto + $kwota_czapki_brutto + $kwota_buty_brutto;
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Obsługa zamówienia</title>
		<link href="style.css" rel="stylesheet" />
	</head>
	<body>
		<div id="container">
			<h1>Zamówienie</h1>
			<?php
			echo "<p>Cena netto zamówionych koszulek: ".
			$kwota_koszulki_netto."<br/>";
			echo "Cena netto zamówionych spodni: ".
			$kwota_spodnie_netto."<br/>";
			echo "Cena netto zamówionych czapek: ".
			$kwota_czapki_netto."<br/>";
			echo "Cena netto zamówionych butów: ".$kwota_buty_netto."<br/></p>";
			echo "Wartość netto całego zamówienia: ".
			$kwota_zamowienia_netto."<br/><hr>";
			echo "<p>Cena brutto zamówionych koszulek: ".
			$kwota_koszulki_brutto."<br/>";
			echo "Cena brutto zamówionych spodni: ".
			$kwota_spodnie_brutto."<br/>";
			echo "Cena brutto zamówionych czapek: ".
			$kwota_czapki_brutto."<br/>";
			echo "Cena brutto zamówionych butów: ".$kwota_buty_brutto."<br/></p>";
			
			echo "Wartość brutto całego zamówienia: ".
			$kwota_zamowienia_brutto."<br/><hr>";
			?>
			
			<form action="kasa.php" method="post">
			<span>Kwota do zapłaty:</span> <input type="text"
			name="kwota" size=3 maxsize=3 />
			<input value="<?php echo $kwota_zamowienia_brutto; ?>" type="hidden" name="kwota_zamowienia"/>
			<input type="submit" value="zapłać" />
		</div>
	</body>
</html>