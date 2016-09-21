<?php

	$naam = $_POST['naam'];
	$fouten = $_POST['fouten'];
	$norm = $_POST['rdb'];
	$cijfer = 10 - $fouten/$norm;
	$fcijfer = round($cijfer, 1);
	$lower = strtolower($naam);
	$upper = ucfirst($lower);



	if ($fcijfer<0){$fcijfer = 0;}

	if (!strlen(trim($_POST['naam'])) == 0 || !strlen(trim($_POST['fouten'])) == 0) {
			if (is_numeric($_POST['fouten']))
			{
			if (!strlen(trim($_POST['fouten'])) > 2) {
				echo "Naam: " . ucfirst($naam) . "<br>" . "Fouten: " . $fouten . "<br><br>";
				echo $fcijfer . "<br>";
			}else{
				echo "Getal is meer dan 3 karakters lang!<br>";
			}
			}else{
				echo 'Geen getal ingevoerd!<br>';
			}
			}else{
				echo "Je hebt geen naam of fouten ingevuld<br>";
			}	

	



	/*if(strlen(trim($_POST['naam'])) == 0 || strlen(trim($_POST['fouten'])) == 0) {
			echo "Je hebt geen naam of fouten ingevuld<br>";
		}else {
			echo "Naam: " . ucfirst($naam) . "<br>" . "Fouten: " . $fouten . "<br><br>";
		}

		if (!is_numeric($_POST['fouten']))
			{
			    echo 'Geen getal ingevoerd!<br>';
			}

		if (strlen(trim($_POST['fouten'])) > 2) {
			echo "Getal is meer dan 3 karakters lang!<br>";
		}*/



?>

<!DOCTYPE html>
<html>
<head>
	<title>Process</title>
</head>
<body>

	<a href="1a.php">Klik hier om terug te gaan.</a>
</body>
</html>