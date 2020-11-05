<!DOCTYPE html>

<html>

<body>

	<?php		
	$database_lokatie     = 'localhost';
	$database_naam        = 'ja';
	$database_gebruiker   = 'root';
	$database_wachtwoord  = '';
	$database_connectie = new PDO("mysql:host=localhost;dbname=ja", "root", "");

	$sql = "SELECT * FROM locations";
	$statement = $database_connectie->prepare($sql); 
	$statement->execute();
	$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);
	
	foreach($database_gegevens as $gebruiker){  
	  echo $gebruiker['name'] . "</br> Adres: " . $gebruiker['address'] . "</br> stad: " . $gebruiker['city'] . "</br></br>";
	}
	?>
</body>

</html>