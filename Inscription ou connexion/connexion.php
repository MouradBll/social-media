<?php
session_start();
require 'db.php';
if (isset($_POST['soumettre']))
{
    if (!empty($_POST['mail']))
    {
        $query = $db->prepare("SELECT username FROM users WHERE mail = :mail and mdp = :mdp");
        $query->execute([
            "mail"=>$_POST['mail'],
            "mdp"=>$_POST['mdp']

        ]);
        $data = $query->fetchAll();
        var_dump($data);
        if ($data)
        {
            $_SESSION['mail'] = $_POST['mail'];
            header('Location: user.php');
        }
        else
        {
            header('Location: index.php');
        }
    }
}

else
{
    header('Location: index.php');
}

