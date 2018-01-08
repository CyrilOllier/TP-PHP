
<header>
	<div id="titre_principal">
		<div id="logo">
			<!--img src="<?= constant("SITE_URL") ?>/images/zozor_logo.png" alt="Logo de Zozor" /-->
			<h3>LIMOISSA THE LIBRAIRY</h3>
		</div>
		
	</div>

	<nav>
	<?php

	if ($isloguer == true)	
	{ ?>
		<ul>
			<li><a href=<?= constant('SITE_URL') ?>/index.php>Accueil</a></li>
			<li><a href=<?= constant('SITE_URL') ?>/allLibrairie>Librairie</a></li>
			<li><a href=<?= constant('SITE_URL') ?>/profilmembre/<?= $_SESSION['id']?>><?php echo $loguer ; ?></a></li>
			<li><a href=<?= constant('SITE_URL') ?>/deconnexionmembre/<?= $_SESSION['id']?>>Déconexion</a></li>			
			<li><a href=<?= constant('SITE_URL') ?>/contact>Contact</a></li>			
		</ul>
	<?php  }
	else if($isloguer == false)	
	{ ?>
		<ul>
		<li><a href=<?= constant('SITE_URL') ?>/index.php>Accueil</a></li>
		<li><a href=<?= constant('SITE_URL') ?>/formconnexionmembre><?php echo $loguer ; ?></a></li>		
		<li><a href=<?= constant('SITE_URL') ?>/formcreatemembre>inscription</a></li>		
		<li><a href=<?= constant('SITE_URL') ?>/contact>Contact</a></li>		
				</ul>
	<?php } ?>
	</nav>
	
</header>

<?php /* insertion bloc d'information */
include "info.php"; 
?>

<!--div id="banniere_image"-->
	<!--div id="banniere_description">
		Test MVC CRUD Membre<a href="=<?php /**<?= constant('SITE_URL') ?>/readnews/<?=$news->getId()?>**/ ?>">
			class="bouton_rouge">Voir l'article <img
			src="<?= constant("SITE_URL") ?>/images/flecheblanchedroite.png" alt="" /></a>
	</div>
</div-->

