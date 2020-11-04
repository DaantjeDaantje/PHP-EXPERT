<!DOCTYPE html>

<html>

<body>
	<?php		
	$host = 'localhost';
	$db   = 'maarkijk';
	$user = 'root';
	$pass = '';
	
	$db_conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

	$statement = $db_conn->prepare('SELECT * FROM users WHERE firstname = "Mohamed"');
	$statement->execute();
	$statement->execute();

	foreach ($statement as $row){
		echo $row['id'] . " " . $row['firstname'] . " " . $row['lastname'] . " " . $row['email'] . " " . $row['password'] . "<br>";
	}

	
	?>
</body>

</html>