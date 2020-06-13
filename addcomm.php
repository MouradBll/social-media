<?php 

if(!empty($_POST)){


    require "function.php";
    $conn=connect_bdd();
    $contenu=$_POST['contenu'];
    $post_id=$_POST['post_id'];

    $sql="INSERT INTO commentaires (contenu,post_id) VALUES ('$contenu','$post_id')";

    $conn->query($sql);
    header("Location: timeline.php?id=$post_id");
}
?>  