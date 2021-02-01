<!DOCTYPE html>

<html>
<head>
<title>Home</title>
<?php
    require "include/database.php";
    include "include/menu.php";
    include "include/header.php";
?>
</head>
</head>
<body>
	<?php
        $sql = "SELECT * FROM superheroes limit 25";
        $query = "SELECT * FROM `superheroes`";
        $query_run = mysqli_query($connection, $query);
        ?>
    
    <body>
        <div class="containter">    
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Alignment</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while($row = mysqli_fetch_array($query_run)){
                        ?>
                        <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['Title']; ?></td>
                            <td><?php echo $row['Alignment']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</body>

</html>
