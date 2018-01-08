<article>
	<h1>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Catégorie client"
			class="ico_categorie" />Pannel administration
	</h1>
	
<?php

// formatage de l'heure afficher : heure minutes seconde      
$date = date("d-m-Y");
$heure = date('H:i:s');
?>

	<div class="container">	
	
	Salut :<b> <?= $_SESSION['pseudo'] ?></b><br />
	
	
	Ceci est la page d'administration du site, <br />
	nous somme le <?php print $date ;?> et il est : <?php print $heure ;?> <br />&nbsp;<br />
	<table >
		<tr>
			<td width="300px" valign="top">
				<ul>	
					<li><u>Bloc Info Perso</u></li><br />
					<ul>
					<li>
						<a class="btn btn-danger" href=<?= constant('SITE_URL') ?>/deconnexionmembre/<?= $_SESSION['id']?>>Déconnexion</a></li><br />
						<li><a class="btn btn-success" href=<?= constant('SITE_URL') ?>/readmembre/<?= $_SESSION['id']?>>Voir mes infos membre </a></li><br />
						<li><a class="btn btn-success" href=<?= constant('SITE_URL') ?>/formupdatemembre/<?= $_SESSION['id']?>>Update infos membre</a></li><br />					
						<li><a class="btn btn-info" href=<?= constant('SITE_URL') ?>/deconnexionmembre/<?= $_SESSION['id']?>>Mes notes</a> à faire !</li><br />
						<li><a class="btn btn-info" href=<?= constant('SITE_URL') ?>/deconnexionmembre/<?= $_SESSION['id']?>>Méssage</a> à faire !</li><br />
						<li><a class="btn btn-danger" href=<?= constant('SITE_URL') ?>/formDeleteAction/<?= $_SESSION['id']?>>Supprimer mon compte</a></li><br />
					</ul>
				</ul>
			</td>
			<td width="350px" valign="top">
				<ul>
					<li><u>Bloc Gestion Site</u></li><br />
					<ul>
						<li><a class="btn btn-success" href=<?= constant('SITE_URL') ?>/ADMreadallmembre>Gestion des membres</a></li><br />						
						<li><a class="btn" href=<?= constant('SITE_URL') ?>/ADMreadallmembre>Titre du site</a> à faire !</li><br />
						<li><a class="btn" href=<?= constant('SITE_URL') ?>/ADMreadallmembre>Méssage d'information défilant</a> à faire !</li><br />
						<li><a class="btn" href=<?= constant('SITE_URL') ?>/ADMreadallmembre>Envoyer un méssage général</a> à faire !</li><br />						
						<li><a class="btn" href=<?= constant('SITE_URL') ?>/ADMreadallmembre>FAQ</a> à faire !</li><br />
						<li><a class="btn" href=<?= constant('SITE_URL') ?>/ADMreadallmembre>Statistique</a> à faire !</li><br />
						
					</ul>
				</ul>
			</td>
			<td width="300px" valign="top">
				<ul>
					<li><u>Bloc Gestion Module</u></li><br />
					<ul>
						<li><a class="btn btn-success" href=<?= constant('SITE_URL') ?>/ADMlibrairie>Librairie</a> en cour !</li>
						<li><a class="btn" href=<?= constant('SITE_URL') ?>/boutique>Forum</a> à faire !</li>
						<li><a class="btn" href=<?= constant('SITE_URL') ?>/boutique>Wiki</a> à faire !</li>
						<li><a class="btn" href=<?= constant('SITE_URL') ?>/boutique>Galerie d'image</a> à faire !</li>
						<li><a class="btn" href=<?= constant('SITE_URL') ?>/boutique>méssagerie</a> à faire !</li>
						<li><a class="btn" href=<?= constant('SITE_URL') ?>/boutique>news</a> à faire !</li>
						<li><a class="btn" href=<?= constant('SITE_URL') ?>/boutique>article</a> à faire !</li>
						<li><a class="btn" href=<?= constant('SITE_URL') ?>/boutique>Top vote</a> à faire !</li>
						<li><a class="btn" href=<?= constant('SITE_URL') ?>/boutique>Sondage</a> à faire !</li>
						<li><a class="btn" href=<?= constant('SITE_URL') ?>/boutique>Boutique</a> à faire !</li><br />&nbsp;<br />
					</ul>
				</ul>
			</td>
		</tr>
	</table>
	</div>
	
</article>