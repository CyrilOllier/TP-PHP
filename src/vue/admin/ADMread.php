<article>
	<h1>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Catégorie client"
			class="ico_categorie" />Information du membre
	</h1>
	
	<div class="container">
	Numèro du membre : <?= $membre->getId() ?><br /><br />
	Pseudo : <?= $membre->getPseudo() ?><br />
	<!-- Password : <?= $membre->getPass() ?><br /-->
	Email : <?= $membre->getEmail() ?><br />
	Type de droit : <?= $membre->getType_droitString() ?><br />
	Date de naissance : <?= $membre->getDate_naissance() ?><br />
	Date d'enregistrement : <?= $membre->getDate_enregistrement() ?><br />
	
	<a class="btn btn-info" href="javascript:history.back()">Retour</a>
	<?php /** <a href=<?= constant('SITE_URL') ?>/formorder/<?=$membre->getId()?>>Creation commande</a><br />	
	<a href=<?= constant('SITE_URL') ?>/readmembre/<?=$membre->getId()?>>Voir toutes les commandes passer</a><br /> **/ ?>
	</div>
	
</article>