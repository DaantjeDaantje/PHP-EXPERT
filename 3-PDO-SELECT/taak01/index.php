<!DOCTYPE html>

<html>

<body>
	<?php		
	$database_lokatie     = 'localhost';
	$database_naam        = 'toolsforever';
	$database_gebruiker   = 'root';
	$database_wachtwoord  = '';
	$database_connectie = new PDO("mysql:host=localhost;dbname=ja", "root", "");

	$sql = "SELECT * FROM users";
	$statement = $database_connectie->prepare($sql); 
	$statement->execute();
	$database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);
	
	foreach($database_gegevens as $gebruiker){  
	  echo $gebruiker['firstname'] . " " . $gebruiker['lastname'] . "</br> Email: " . $gebruiker['email'] . "</br> Rol: " . $gebruiker['role']. "</br></br>";
	}
	?>
</body>

</html>