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
		                  <th>prenom</th>
		                  <th>nom</th>
		                  <th>pays d'origine</th>
							<th>Année de naissance</th>						  
		                  <th>Action</th>
		                </tr>
		              </thead>
		              <tbody>
					  
					  
    <?php foreach($author as $element)
	{ 	?>		
	<tr>
	<td><?= $element->getId() ?></td>
	<td><?= $element->getFirstname() ?></td>
	<td><?= $element->getLastname() ?></td>	
	<td><?= $element->getNative_country() ?></td>
	<td><?= $element->getBirth_year() ?></td>	
	<td><a href=<?= constant('SITE_URL') ?>/ADMformUpdateAuthor/<?= $element->getId() ?> class="btn btn-success">Mise a jour</a>
	<a href=<?= constant('SITE_URL') ?>/ADMformDeleteAuthor/<?= $element->getId() ?> class="btn btn-danger">Supprimer</a>
	</td></tr>
	<?php } ?>
	<a class="btn btn-info" href="javascript:history.back()">Retour</a>&nbsp;
	<a class="btn btn-success" href=<?= constant('SITE_URL') ?>/ADMcreateFormAuthor>Ajouter un auteur</a><br /><br />
	<h4><u>Liste des auteurs</u></h4>
	</div>
	
</article>
		              