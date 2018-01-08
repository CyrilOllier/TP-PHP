<article>
	<h1>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Catégorie client" class="ico_categorie" />Gestion Librairie
	</h1>
	
	<div class="container">
		<table class="table table-striped table-bordered" border="1">
		    <thead>
		       <tr>
					<th>id</th>
					<th>titre</th>
					<th>description</th>
					<th>liste d'auteurs</th>						  
					<th>Action</th>
		       </tr>
			</thead>
			<tbody>			
				<tr>	
					<td><?= $book->getId() ?></td>
					<td><?= $book->getTitle() ?></td>
					<td><?= $book->getOverview() ?></td>		
					<td>
			<?php
				// envoi de l'id de book a la fonction readdistinct pour afficher les auteurs d'un livre
				$author = authorDao::readdistinctD($book->getId());
				// fin d'envoi 
			foreach($author as $elements)
				{ ?>
				-><?= $elements->getFirstname() ?>
				<?= $elements->getLastname() ?>	
				<?= $elements->getNative_country() ?><br />
			<?php } ?>
					</td>
					<td>
						<form class="form-horizontal" action="/ADMaddAuthor" method="POST">	
							<input type="hidden" name="book_id" value="<?= $book->getId() ?>" />
								<select name="author_id">
				<?php foreach($authors as $author) { ?> 			
									<option value=<?= $author->getId() ?> name="author_id" >id : <?= $author->getId() ?>&nbsp;<?= $author->getFirstname() ?>&nbsp;<?= $author->getLastname() ?> origine : <?= $author->getNative_country() ?></option> 
				<?php } ?>
								</select>
							<input type="submit" value="Ajouter"> 
						</form>
						<a href=<?= constant('SITE_URL') ?>/ADMformDeleteAuthorBook/<?= $book->getId() ?> class="btn btn-danger">Supprimer tous les auteurs du livre</a>
	
						</td>
					</tr>
						
	<a class="btn btn-info" href="javascript:history.back()">Retour</a>&nbsp;
	<h4><u>Ajout d'un ou plusieurs auteurs au livre</u></h4>
	</div>
	
</article>
		              