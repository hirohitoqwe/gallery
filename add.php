<?php
    require_once 'database.php';
     if (!empty($_FILES['file'])){
         $file = $_FILES['file'];
         $name=$file['name'];
         $pathofFile=__DIR__.'/img/'.$name;
         if (!move_uploaded_file($file['tmp_name'],$pathofFile)){
             echo 'error';
         }
         $data= $pdo->prepare("INSERT INTO gallery(path) VALUE('$name')");
         $data->execute();
         header('Location:index.php');
         
     }
?>