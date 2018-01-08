<script type="text/javascript" src="<?= constant("SITE_URL") ?>/js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="<?= constant("SITE_URL") ?>/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" class="init">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
	</script>
	
<article>

	<h1>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Catégorie client" class="ico_categorie" />Librairie LIMOISSA
	</h1>
	
	<table id="example" class="display" width="100%" cellspacing="1">	
		<thead>
			<tr>
				<!--th>id</th-->								
		       <th>titre</th>
		       <th>description</th>		                  
		       <th>prix</th>
			   <th>éditeur</th>	
				<th>date de publication</th>
		       <th>disponibilité</th>									   
		       <th>auteur</th>						   
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
				
				<td><?= $element->getTitle() ?></td>
				<td><?= $element->getOverview() ?></td>	
				<td><?= $element->getPrice() ?></td>
				<td><?= $element->getPublisher() ?></td>
				<td><?= $element->getPublication_date() ?></td>
				<!-- variable qui affiche si oui ou non pour la disponibilité -->	
				<td><?= $valeur; ?></td>
				<!-- fin variable qui affiche si oui ou non pour la disponibilité -->	
				<td>
	<?php 
		// envoi de l'id de book a la fonction readdistinct pour afficher les auteurs d'un livre
		$author = authorDao::readdistinctD($element->getId());
		// fin d'envoi 
	foreach($author as $elements)
		{ ?>
		-><?= $elements->getFirstname() ?>
		<?= $elements->getLastname() ?>	
		<?= $elements->getNative_country() ?><br />	
	<?php } } ?>	
				</td>
			</tr>
	</tbody>
</table>
</div>	
	
</article>
		              