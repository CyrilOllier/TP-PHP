<article>
	<h1>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Catégorie client"
			class="ico_categorie" />Profil du membre
	</h1>
	
<?php	
// formatage de l'heure afficher : heure minutes seconde      
$date = date("d-m-Y");
$heure = date('H:i:s');
?>

	<div class="container">	
	
	Salut :<b> <?= $_SESSION['pseudo'] ?></b><br />
	<?php $membre = MembreDao::read($_SESSION['id']);
	// var_dump( $membre );?>
	Ceci est ta page de profil, <br />
	nous somme le <?php print $date ;?> et il est : <?php print $heure ;?> <br />
	<a href=<?= constant('SITE_URL') ?>/readmembre/<?= $_SESSION['id']?>>voir mes infos membre </a><br /> 
	<a href=<?= constant('SITE_URL') ?>/formupdatemembre/<?= $_SESSION['id']?>>Update infos membre</a><br /> 
	<a href=<?= constant('SITE_URL') ?>/deconnexionmembre/<?= $_SESSION['id']?>>Déconnexion</a><br />
	<a href=<?= constant('SITE_URL') ?>/formDeleteAction/<?= $_SESSION['id']?>>Supprimer mon compte</a><br />	
	<?php
	
		//affichage du lien panel admin pour les droit 0 admin et 2 moderateur a modifier pour repartir
		
		if (($membre->getType_droit() == 0) || ($membre->getType_droit() == 2))
			{ ?>
			<li><a href=<?= constant('SITE_URL') ?>/profilAdmin/<?= $_SESSION['id']?>>Administration</a></li>
			<?php }
		else if ($membre->getType_droit() == 1)
			{ ?>
			<a href=<?= constant('SITE_URL') ?>/readallmembre>Liste des membres</a><br /> 
			<?php }	
			// fin condition d'affichage en fontion des droit ?> 
	
	
	</div>
	
</article>