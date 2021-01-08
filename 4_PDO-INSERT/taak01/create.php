<!DOCTYPE html>

<html>

<body>
	<?php		
	$host = 'localhost';
	$db   = 'ja';
	$user = 'root';
	$pass = '';
	
	$db_conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $name = $_POST['form_name'];
    $address = $_POST['form_address'];

    $sql = "INSERT INTO locations (name, address) VALUES (:ph_name , :ph_address)" ;
    $stmt = $db_conn->prepare($sql);
    $stmt->bindParam(":ph_name", $name );
    $stmt->bindParam(":ph_address", $address );
    $stmt->execute();
        
	?>
</body>

</html>