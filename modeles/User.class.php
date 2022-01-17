<?php

class User{
    private $id_user;
    private $username;
    private $password;
    private $last_login;
    private $id_groupe;

    function getIdUser() {
        return $this->id_user;
    }

        function getUserName() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getLastLogin() {
        return $this->last_login;
    }
     function getIdGroupe() {
        return $this->id_groupe;
    }

    function setLastLogin() {
        $this->last_login;
    }

    public static function afficherTout()
    {
        $req=MonPdo::getInstance()->prepare("select * from user") ;
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'user') ;
        $req->execute();
        $lesResultats=$req->fetchAll();
        return $lesResultats;
    }
    /*
    public static function verifier($username, $password, $id_group){
        $req=MonPdo::getInstance()->prepare("select * from user, user_group "
                . "where username =:username and password=:password and id_group=:2") ;
                */
    public static function verifier($username, $password){
        $req=MonPdo::getInstance()->prepare("select * from user "
        . "where username =:username and password=:password") ;
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'user') ;
        $req->bindParam('username', $username);
        $req->bindParam('password', $password);
       // $req->bindParam('id_group', $id_group);
        $req->execute();
        $leResultat=$req->fetchAll();
        $nb_lignes= count($leResultat) ;
        
        if ($nb_lignes==0) 
// La requête ne renvoie aucun résultat, l'identifiant est inconnu 
// et/ou le mot de passe est incorrect (on ne distingue pas les deux cas)
		{
		$rep= false;
		}
		else
// La requête renvoie au plus un résultat (l’user recherché)
		{
		$rep=true ;
  
		}	
                
        return $rep ;
       }
       
       public static function deconnecter()
       {
           unset($_SESSION["autorisation"]) ;
       }
       
}