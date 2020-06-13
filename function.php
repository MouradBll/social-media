<?php

    function connect_bdd()
    {
        try {
            $bdd=new PDO('mysql:dbname=social media;host=localhost;charset=utf8','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

            return $bdd;
        }
        catch(PDOException $e)
        {
            return "fail";
        }
    }

?>