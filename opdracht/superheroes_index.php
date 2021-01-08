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
        $statement = $db_conn->prepare($sql);
        $statement->execute();
        $database_gegevens = $statement->fetchAll(PDO::FETCH_ASSOC);
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
                    <?php foreach($database_gegevens as $item) : ?>
                        <tr>
                            <td><?php echo $item['ID'] ?></td>
                            <td><?php echo $item['Title'] ?></td>
                            <td><?php echo $item['Alignment'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</body>

</html>
