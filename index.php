<?php
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

ini_set('display_errors', 0);
$params = [];

if ($_GET['action'] == 'login') {
    echo str_replace(array_keys($params), $params, file_get_contents('login.html'));
} elseif ($_GET['action'] == 'logout') {
    echo str_replace(array_keys($params), $params, file_get_contents('login.html'));
} else {
	echo str_replace(array_keys($params), $params, file_get_contents('login.html'));
}
