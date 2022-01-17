<?php
if($_SESSION["autorisation"]=="OK" )
{
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Test GLI</title>
		<link type="text/css" href="style.css" rel="stylesheet" media="all" />
		<script type="text/javascript" src="script.js"></script>
	</head>
	<body>
		<div>
		<ul>
			<li><a href="/index.php">Accueil</a></li>
			<li><a href="index.php?uc=user&choix=deconnexion">Déconnexion</a></li>
		</ul>
        </div>
		<div id="clickblock">
			<button onclick="autoCorrect(this); return false;">Il y a des fotes dan sete fraz. Cliké ici pour lé corrigés.</button>
		</div>
		<?php
}
?>
	</body>
</html>

