<!DOCTYPE html>

<html>
<head>
<title>Edit</title>
<?php
    require "include/database.php";
    include "include/menu.php";
    include "include/header.php";
?>
</head>
<body>
<?php
if(isset($_GET['edit_ID'])){
    $sql = "SELECT * FROM superheroes WHERE ID =" .$_GET['edit_ID'];
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_array($result);
}

if(isset($_POST['btn-update'])){
    $ID = $_POST['ID'];
    $Title = $_POST['Title'];
    $Alignment = $_POST['Alignment'];
    $Gender = $_POST['Gender'];
    $Height = $_POST['Height'];
    $Weight = $_POST['Weight'];
    $Identity = $_POST['Identity'];
    $MaritalStatus = $_POST['MaritalStatus'];
    $Eyes = $_POST['Eyes'];
    $Hair = $_POST['Hair'];
    $PlaceOfBirth = $_POST['PlaceOfBirth'];
    $PlaceOfDeath = $_POST['PlaceOfDeath'];
    $Citizenship = $_POST['Citizenship'];
    $Occupation = $_POST['Occupation'];
    $update = "UPDATE superheroes SET ID='$ID', Title='$Title', Alignment='$Alignment', Gender='$Gender', Height='$Height', Weight='$Weight', Identity='$Identity', MaritalStatus='$MaritalStatus', Eyes='$Eyes', Hair='$Hair', PlaceOfBirth='$PlaceOfBirth', PlaceOfDeath='$PlaceOfDeath', Citizenship='$Citizenship', Occupation='$Occupation' WHERE ID=". $_GET['edit_ID'];
    $up = mysqli_query($connection, $update);
}

?>

<form method="post">
    <label>ID:</label><input type="text" name="ID" placeholder="ID" value="<?php echo $row['ID']; ?>"><br>
    <label>Title:</label><input type="text" name="Title" placeholder="Title" value="<?php echo $row['Title']; ?>"><br>
    <label>Alignment:</label><input type="text" name="Alignment" placeholder="Alignment" value="<?php echo $row['Alignment']; ?>"><br>
    <label>Gender:</label><input type="text" name="Gender" placeholder="Gender" value="<?php echo $row['Gender']; ?>"><br>
    <label>Height:</label><input type="text" name="Height" placeholder="Height" value="<?php echo $row['Height']; ?>"><br>
    <label>Weight:</label><input type="text" name="Weight" placeholder="Weight" value="<?php echo $row['Weight']; ?>"><br>
    <label>Identity:</label><input type="text" name="Identity" placeholder="Identity" value="<?php echo $row['Identity']; ?>"><br>
    <label>MaritalStatus:</label><input type="text" name="MaritalStatus" placeholder="MaritalStatus" value="<?php echo $row['MaritalStatus']; ?>"><br>
    <label>Eyes:</label><input type="text" name="Eyes" placeholder="Eyes" value="<?php echo $row['Eyes']; ?>"><br>
    <label>Hair:</label><input type="text" name="Hair" placeholder="Hair" value="<?php echo $row['Hair']; ?>"><br>
    <label>PlaceOfBirth:</label><input type="text" name="PlaceOfBirth" placeholder="PlaceOfBirth" value="<?php echo $row['PlaceOfBirth']; ?>"><br>
    <label>PlaceOfDeath:</label><input type="text" name="PlaceOfDeath" placeholder="PlaceOfDeath" value="<?php echo $row['PlaceOfDeath']; ?>"><br>
    <label>Citizenship:</label><input type="text" name="Citizenship" placeholder="Citizenship" value="<?php echo $row['Citizenship']; ?>"><br>
    <label>Occupation:</label><input type="text" name="Occupation" placeholder="Occupation" value="<?php echo $row['Occupation']; ?>"><br>
    <button type="submit" name="btn-update" id="btn-update" onClick="update()"><strong>Update</strong></button>
</form>
</body>

</html>
