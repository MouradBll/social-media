<?php 
    //require "config.php";
    require "function.php";
    $conn=connect_bdd();
    $contenu=$_POST['contenu'];

    $sql="INSERT INTO posts (contenu) VALUES ('$contenu')";
    $conn->query($sql);

    header("Location: timeline.php");
?>