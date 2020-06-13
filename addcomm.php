<?php 

if(!empty($_POST)){
    require "config.php";
    $conn=mysqli_connect(DB_HOST,DB_LOGIN,DB_PASS);
    mysqli_select_db($conn,DB_BDD);
    extract($_POST);
    $sql="INSERT INTO commentaires (contenu,post_id) VALUES ('$contenu','$post_id')";

    $req = mysqli_query($conn,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'. mysqli_error($conn));

    header("Location: timeline.php?id=$post_id");
}
?>  