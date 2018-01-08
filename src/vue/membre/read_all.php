<article>
	<h1>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Cat�gorie client"
			class="ico_categorie" />Liste des membres
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
		                  <!--th>Action</th-->
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
	<!--td><a href="" class="btn btn-success">mise a jour</a>
	<a href="" class="btn btn-success">supprimer</a>
	</td--></tr>
	<?php } ?>
	<a class="btn btn-info" href="javascript:history.back()">Retour</a>
	
	</div>
	
</article>
		              