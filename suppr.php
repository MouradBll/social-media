<?php 
    echo $_GET["id"]; 

    require "config.php";
    $conn=mysqli_connect(DB_HOST,DB_LOGIN,DB_PASS);
    mysqli_select_db($conn,DB_BDD);

    $sql = "DELETE FROM posts WHERE id={$_GET["id"]}";
    $req = mysqli_query($conn,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'. mysqli_error($conn));

    header("Location: index.php");
?>