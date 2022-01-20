<?php

$message= "Votre identifiant et/ou votre mot de passe sont erronés";
$choix=$_GET["choix"] ;

switch($choix)
{
    case "login":
        include("vues/login.php");
        break ;

    case "verif" :
        $rep=User::verifier(securiser($_POST["username"]), ($_POST["password"])) ;
    
        if($rep==true){
            $_SESSION["autorisation"]="OK" ;
            $_SESSION["username"]=$_POST["username"];
            //$_SESSION["id_groupe"]=$_POST["id_groupe"]; , ($_POST["id_groupe"])
            include("vues/v_user/main.php") ;
            //include('modeles/User.class.php');
            }
        else
            {
                echo '<div class="row"> <h1>' .$message .'</h1>' ;
           // include("vues/login.php") ;
            }
	    break ;

    case "deconnexion":
            User::deconnecter() ;
            header('Location:vues/login.php') ;
            exit;
}
