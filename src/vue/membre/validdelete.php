<article>
<?php 
// Suppression des variables de session et de la session

$_SESSION = array();

session_destroy();


// Suppression des cookies de connexion automatique

setcookie('login', '');

setcookie('pass_hache', ''); ?>

    <div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Suppréssion Utilisateur</h3>
		    		</div>
		    		<center>Votre compte est maintenant supprimer !!</center>
	    			
						  </div>
					</form>
				</div>
			<meta http-equiv="Refresh" content="3;url=http://bloc-base/index.php">	
    </div> <!-- /container -->
  </article>