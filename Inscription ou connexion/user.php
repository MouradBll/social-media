<?php
session_start();
require 'db.php';
$query = $db->prepare("SELECT * FROM friends WHERE username1 = :username1 OR username2 = :username2");
$query->execute([

  "username1"=>$_SESSION['mail'],
  "username2"=>$_SESSION['mail']

]);

$data=$query->fetchAll();

?>

<!DOCTYPE html>
<html>
   <head>
      <title>Bienvenue <?php echo $_SESSION['mail']?></title>
      <link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css">
   </head>
   <div class="container">
      <div class="jumbotron text-justify mt-2" style="box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);">
         <body>
            <h1>Demandes d'amis :</h1>
             <?php 
            for ($i=0; $i <sizeof($data) ; $i++) 
            { 
               if($data[$i]['en_cour']==1 &&  $data[$i]['username2']==$_SESSION['mail'])
               {
                  echo $data[$i]['username1'];
               }
               echo '</br>';
            }



             ?>



            <h1>Liste d'amis : </h1>
            <?php 
            for ($i=0; $i <sizeof($data) ; $i++) 
            { 
               if($data[$i]['username1']==$_SESSION['mail']){
                  echo $data[$i]['username2'];

                  if($data[$i]['en_cour']==1){
                     echo"Demande en attente !!!";
                  }elseif ($data[$i]['en_cour']==0) {
                     echo $data[$i]['username1'];
                  }
               }
               echo '</br>';
            }



             ?>
            
         </body>
      </div>
   </div>
</html>