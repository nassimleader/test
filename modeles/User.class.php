<?php

class User
{
    private $id_user;
    private $username;
    private $password;
    private $last_login;
    private $id_groupe;

    function getIdUser()
    {
        return $this->id_user;
    }

    function getUserName()
    {
        return $this->username;
    }

    function getPassword()
    {
        return $this->password;
    }

    function getLastLogin()
    {
        return $this->last_login;
    }
    function getIdGroupe()
    {
        return $this->id_groupe;
    }
    function setUserName($username)
    {
        return $this->username = $username;
    }
    function setIdGroupe($id_groupe)
    {
        return $this->id_groupe = $id_groupe;
    }

    function setIdUser($id_user)
    {
       return $this->id_user = $id_user;
    }

    function setLastLogin($last_login)
    {
        $this->last_login = $last_login;
    }

    
    public static function afficherUser(User $user)
    {
        $req=MonPdo::getInstance()->prepare("select * from user where id_user=:id_user") ;
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'user') ;
        $req->bindParam('id_user', $user);
        $req->execute();
        $lesResultat=$req->fetchAll();
        return $lesResultat;
    }
    /*
    public static function verifier($username, $password, $id_group){
        $req=MonPdo::getInstance()->prepare("select * from user join user_group "
                . "where username =:username and password=:password and id=:id and id_group=:2") ;
                 $req=MonPdo::getInstance()->prepare("select * from user "
        . "where username =:username and password=:password") ; */
    public static function verifier($username, $password)
    {
        $req=MonPdo::getInstance()->prepare("select * from user "
                . "where username =:username and password=:password") ;
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'user') ;
        $req->bindParam('username', $username);
        $req->bindParam('password', $password);
       // $req->bindParam('id_groupe', $id_groupe); , $id_groupe
        $req->execute();
        $leResultat=$req->fetchAll();
        $nb_lignes= count($leResultat) ;
        
        if ($nb_lignes==0) {
            // La requête ne renvoie aucun résultat, l'identifiant est inconnu
            // et/ou le mot de passe est incorrect (on ne distingue pas les deux cas)
            $rep= false;
        } else {
            // La requête renvoie au plus un résultat (l’user recherché)
            $rep=true ;
        }
                
        return $rep ;
    }
       
    public static function deconnecter()
    {
        unset($_SESSION["autorisation"]) ;
    }

    public static function derniereConnexion($id_user, $last_login, $username)
    {
        $req=MonPdo::getInstance()->prepare("update user "
        . "set last_login =:last_login". "where id_user=:id_user") ;
        $id_user=$username->getIdUser();
        $req->bindParam('id_user', $id_user);
        $last_login=$username->getLastLogin();
        $req->bindParam('last_login', $last_login);
        $req->execute();
        $_SESSION['alert']="La nouvelle date de connexion est le" .$last_login. "!" ;
        return $_SESSION['alert'] ;
    }
}