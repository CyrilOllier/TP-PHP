<article>
	<h1>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Catégorie client"
			class="ico_categorie" />Gestion Librairie
	</h1>
	
	<div class="container">
	
	<table class="table table-striped table-bordered" border="1">
		              <thead>
		                <tr>
		                <th>id</th>
		                  <th>titre</th>
		                  <th>description</th>
		                  <th>prix</th>
		                  <th>disponibilité</th>
							<th>éditeur</th>
							<th>date de publication</th>						  
		                  <th>Action</th>
		                </tr>
		              </thead>
		              <tbody>
					  
				  
    <?php foreach($book as $element)
	{ 
		// condition qui affiche oui ou non en fonction de la valeur recu de la DB
		if($element->getAvailability() == 1)
			{
				$valeur = "oui";
			}
		else if ($element->getAvailability() == 2)
			{
				$valeur = "non";
			}
		// fin condition
	?>		
	<tr>
	<td><?= $element->getId() ?></td>
	<td><?= $element->getTitle() ?></td>
	<td><?= $element->getOverview() ?></td>	
	<td><?= $element->getPrice() ?></td>
	<!-- variable qui affiche si oui ou non pour la disponibilité -->	
	<td><?= $valeur; ?></td>
	<!-- fin variable qui affiche si oui ou non pour la disponibilité -->
	<td><?= $element->getPublisher() ?></td>
	<td><?= $element->getpublication_date() ?></td>	
	<td><a href=<?= constant('SITE_URL') ?>/ADMformUpdateBook/<?= $element->getId() ?> class="btn btn-success">Mise a jour</a>
	<a href=<?= constant('SITE_URL') ?>/ADMformDeleteBook/<?= $element->getId() ?> class="btn btn-danger">Supprimer</a>
	<a href=<?= constant('SITE_URL') ?>/ADMformAddAuthor/<?= $element->getId() ?> class="btn btn-info">Ajout / sup Auteur</a>
	</td></tr>
	<?php } ?>
	
	<a class="btn btn-info" href="javascript:history.back()">Retour</a>&nbsp;
	<a class="btn btn-success" href=<?= constant('SITE_URL') ?>/ADMformcreateBook>Ajouter un livre</a>&nbsp;
	<a class="btn btn-success" href=<?= constant('SITE_URL') ?>/ADMreadAllAuthor>Gérer les auteurs</a> <br /><br />
	<h4><u>Liste des livres</u></h4>
	
	</div>
	
</article>
		              