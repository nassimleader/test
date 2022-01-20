<?php
if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="OK")
{

?>

<?php
   if(!empty($_SESSION['alert']))
    {
    ?>

    <div class="alert alert-success" role="alert" data-dismiss="alert">
     <?php 
     echo $_SESSION['alert'] ;
     unset($_SESSION['alert']) ;
     ?>
     </div>

    <?php
    }
    //Bienvenue a vous' .$user->getUsername() . ' Voici votre derniere connexion' .$user->getLastLogin() .
?>
<div class="container mb-5">
    <div class="row mt-5 justify-content-center">
        <h1 class="text-center"> Bienvenue a vous</h1>
    </div>
    <div class="centrage">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
		<a class="nav-link" href="/index.php">Accueil</a> <br>
        <br>
        <?php
        "<br>";
        echo date("d/m/Y"); // Affiche la date du jour
        echo " Il est " . date("H:i:s") ; // Affiche l'heure
        "<br>";
       //echo $username->getUsername();
        // print_r($last_login->getLastLogin());
        //var_dump($last_login);
       // print_r($last_login);
?>
        </div>
<br>
	<div class="col-md-6">
            <a class="nav-link" href="index.php?uc=user&choix=deconnexion"> Vous deconnecter</a>
        </div>
<br>
		<div id="clickblock">
			<button onclick="autoCorrect(this); return false;">Il y a des fotes dan sete fraz. Cliké ici pour lé corrigés.</button>
		</div>
     </div>
</div>



<?php

/*

foreach($user as $user )
{
        echo "<div class='card text-center' style='width:10rem;'>
          <img class='card-img-top' src='Images/".$username->getUserName()."' >
            <div class='card-body'>
                <h5 class='card-title'>".$last_login->getLastLogin() ."</h5>
                <a .$id_user->getIdUser() ."' class='btn btn-danger' <i class='fas fa-cart-plus'></i></a>
            </div>
        </div>" ;
}*/
}
?>
</div>

