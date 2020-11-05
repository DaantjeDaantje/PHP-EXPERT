<!DOCTYPE html>

<html>

<body>
	<?php
	$host = 'localhost';
	
	$db   = 'ja';
	$user = 'root';
	$pass = '';
	
	$db_conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

	$statement = $db_conn->prepare('SELECT * FROM locations WHERE city = "Groningen"');
	$statement->execute();

	foreach ($statement as $row){
		echo $row['id'] . " " . $row['name'] . " " . $row['address'] . " " . $row['city'] . "<br>";
	}

	?>
</body>

</html>
