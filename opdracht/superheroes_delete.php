<!DOCTYPE html>

<html>
<head>
<title>Delete</title>
<?php
    require "include/database.php";
    include "include/menu.php";
    include "include/header.php";
?>
</head>

<body>
<?php
        if(isset($_POST['delete'])){
                $ID = $_POST['ID'];
                $query = "DELETE FROM superheroes WHERE ID = $ID";
                $result = mysqli_query($connection, $query);
                if($result){
                        echo'Data deleted';
                }
                else{
                        echo'Data not deleted';
                }
                mysqli_close($connection);
        }

?>
        <form action="superheroes_delete.php" method="post">
                Delete met ID:&nbsp;<input type="text" name="ID" placeholder="ID" required><br><br>
                <input type="submit" name="delete" value="Clear Data">
        </form>
</body>

</html>

