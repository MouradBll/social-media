<?php 
    require "config.php";
    $conn=mysqli_connect(DB_HOST,DB_LOGIN,DB_PASS);
    mysqli_select_db($conn,DB_BDD);
    
    if(!empty($_POST)){
        
        extract($_POST);
        $sql="UPDATE posts SET titre='$titre', contenu='$contenu' WHERE id=$id";
        $req = mysqli_query($conn,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'. mysqli_error($conn));
        echo "post modidee";
        $_GET["id"]=$id;
        header("Location: index.php");
        
    }
    $sql="SELECT * FROM posts WHERE id={$_GET["id"]}";

    $req = mysqli_query($conn,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'. mysqli_error($conn));

    $data=mysqli_fetch_assoc($req);
    print_r($data);


?>

<form method="post" action="edit.php">

    <input name="id" type="hidden" value="<?php echo $data["id"]; ?>">
    Titre: <input type="text" name="titre" value="<?php echo $data["titre"]; ?>">
    <br/>
    contenu: <br/>
    <textarea name="contenu" style="width:100%;height:300px;"><?php echo $data["contenu"]; ?></textarea>
    <input type="submit" value="confirmer">
</form>
 