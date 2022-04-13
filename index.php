<?php
    require_once 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>
<body>
    <form action="add.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file"/>
        <input type="submit" value="send"/>
    </form>
    
    <?php foreach ($res as $img){
        echo "<img src = '/img/{$img['path']}' width=200px height=200px>";
    } 
    ?>

    
</body>
</html>