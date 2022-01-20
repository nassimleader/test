<?php
session_start() ;
include "controleurs/fonction.php" ;
include "modeles/User.class.php";
include "modeles/monPdo.php" ;
include "vues/header.php" ;
include "controleurs/controleurUser.php" ;
/*******************************************************************************
Le sujet est assez basique :

- Page de connexion
- Lors d'une connexion réussie, la date de dernière connexion est mise à jour et
on est redirigé sur la page principale si le mot de passe dans la base
correspond au mot de passe entré et si l'utilisateur fait partie du groupe 2.
Si l'authentification échoue, on retourne sur la page de connexion et un message
d'erreur s'affiche.
- Une fois connecté, une phrase mal orthographiée est affichée. Cliquer dessus la
corrige.
- On peut ensuite se déconnecter, on est alors redirigé vers la page de connexion.

Tu es libre de faire le test à ta manière le but étant de nous montrer ce que tu sais faire
*******************************************************************************/
/*
ini_set('display_errors', 0);
$params = [];

if ($_GET['action'] == 'login') {
    echo str_replace(array_keys($params), $params, file_get_contents('vues/login.php'));
} elseif ($_GET['action'] == 'logout') {
    echo str_replace(array_keys($params), $params, file_get_contents('vues/login.php'));
} else {
	echo str_replace(array_keys($params), $params, file_get_contents('vues/login.php'));
}

*/

//si l'user-case est vide, je récupère l'accueil
if(empty($_GET["uc"])){
        $uc="login" ;
    }
    //sinon, je récupère le user-case
    else{
        $uc=$_GET["liste"] ;
    }

switch ($uc) {
/*   case "accueil" :
        include "vues/accueil.php" ;
        break ;*/
            
    case "login":
        include("vues/login.php");
        break ;

    case "user":
        include("controleurs/controleurUser.php") ;
        break ;
    
    case "liste" :
        $lesResultats=User::afficherUser($user);
        include("vues/v_user/main.php") ;
        break ;

    case "userco":
        $User=User::derniereConnexion($id_user, $last_login, $username);
        include("vues/v_user/main.php") ;
        break ;
    }

    include "vues/footer.php" ;

?>