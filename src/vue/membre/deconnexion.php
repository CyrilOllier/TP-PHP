<?php 

//session_start();


// Suppression des variables de session et de la session

$_SESSION = array();

session_destroy();


// Suppression des cookies de connexion automatique

setcookie('login', '');

setcookie('pass_hache', ''); ?>
<article>
<div class="container">	
<?php echo '<center><br /><b>Au plaisir de vous revoir !!<br>Vous etes maintenant deconnecté !!</b><br /><br />Redirection automatique vers la page d\'accueil</center>';?>
		<meta http-equiv="Refresh" content="3;url=http://bloc-base/index.php">
</div>
</article>