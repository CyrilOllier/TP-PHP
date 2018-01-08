<article>
	<h1>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Catégorie client"
			class="ico_categorie" />Gestion des membres
	</h1>
	
	<div class="container">
	<table class="table table-striped table-bordered" border="1">
		              <thead>
		                <tr>
		                <th>id</th>
		                  <th>pseudo</th>
		                  <th>email</th>
		                  <th>droit</th>
		                  <th>né</th>
						  <th>date inscription</th>
		                  <th>Action</th>
		                </tr>
		              </thead>
		              <tbody>
					  
					  
    <?php foreach($membre as $element)
	{ 
	//var_dump($membre);
	?>		
	<tr>
	<td><?= $element->getId() ?></td>
	<td><?= $element->getPseudo() ?></td>
	<td><?= $element->getEmail() ?></td>	
	<td><?= $element->getType_droitString() ?></td>
	<td><?= $element->getDate_naissance() ?></td>
	<td><?= $element->getDate_enregistrement() ?></td>
	<td><a href=<?= constant('SITE_URL') ?>/ADMformupdatemembre/<?= $element->getId() ?> class="btn btn-success">mise a jour</a>
	<a href=<?= constant('SITE_URL') ?>/ADMformDeleteAction/<?= $element->getId() ?> class="btn btn-danger">supprimer</a>
	</td></tr>
	<?php } ?>
	<a class="btn btn-info" href="javascript:history.back()">Retour</a>&nbsp; &nbsp;
	<a class="btn btn-success" href=<?= constant('SITE_URL') ?>/ADMformcreatemembre>Crée Membre</a><br /><br />
	
	</div>
	
</article>
		              