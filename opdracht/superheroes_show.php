<!DOCTYPE html>

<html>
<head>
<title>Show</title>
<?php
    require "include/database.php";
    include "include/menu.php";
    include "include/header.php";
?>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <input type="text" name="id" class="btn" placeholder="Type een ID">
            <input type="submit" name="show" class="btn" value="Show">
        </form>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Alignment</th>
                <th>Gender</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Identity</th>
                <th>MaritalStatus</th>
                <th>Eyes</th>
                <th>Hair</th>
                <th>PlaceOfBirth</th>
                <th>PlaceOfDeath</th>
                <th>Citizenship</th>
                <th>Occupation</th>
            </tr>

            <?php
                if(isset($_POST['show'])){
                    $id = $_POST['id'];
                    $query = "SELECT * FROM `superheroes` where id='$id'";
                    $query_run = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_array($query_run)){
                        ?>
                        <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['Title']; ?></td>
                            <td><?php echo $row['Alignment']; ?></td>
                            <td><?php echo $row['Gender']; ?></td>
                            <td><?php echo $row['Height']; ?></td>
                            <td><?php echo $row['Weight']; ?></td>
                            <td><?php echo $row['Identity']; ?></td>
                            <td><?php echo $row['MaritalStatus']; ?></td>
                            <td><?php echo $row['Eyes']; ?></td>
                            <td><?php echo $row['Hair']; ?></td>
                            <td><?php echo $row['PlaceOfBirth']; ?></td>
                            <td><?php echo $row['PlaceOfDeath']; ?></td>
                            <td><?php echo $row['Citizenship']; ?></td>
                            <td><?php echo $row['Occupation']; ?></td>
                        </tr>

                        <?php
                    }
                }
                ?>
        </table>
    </div>
</body>

</html>


