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
<?php echo '<center>Au plaisir de vous revoir !!<br>Vous etes maintenant deconnecté !!</center>';
		//header("Location: index.php");
		?>
</div>
</article>