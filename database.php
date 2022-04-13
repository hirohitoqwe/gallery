<?php
    $user='root';
    $password='';
    $pdo=new PDO('mysql:host=localhost;dbname=gallery',$user,$password);

    $qw=$pdo->prepare('SELECT * FROM gallery');
    $qw->execute();
    $res=$qw->fetchAll();
    
?>