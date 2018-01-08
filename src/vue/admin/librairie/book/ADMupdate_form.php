<article>
	<h1>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Catégorie client"
			class="ico_categorie" />Mise a jour du livre
	</h1>
	
	<?php //selection en fonction du resultat de la requete de celui qui sera checked
	if($book->getAvailability() == 1)
		{
			$true = 'checked="checked"';
			$false = '';
		}
	else 
		{
			$true = '';
			$false = 'checked="checked"';
		}
	
	?>
		
	<div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Mise a jour du livre</h3>
		    		</div>
    				<form class="form-horizontal" action="<?= constant('SITE_URL') ?>/ADMupdateBook/<?= $book->getId() ?>" method="post">
					
					  <div class="control-group <?php echo !empty($titleError)?'error':'';?>">
					    <label class="control-label">titre</label>
					    <div class="controls">
					      	<input name="title" type="text"  placeholder="titre" value="<?php echo !empty($book->getTitle())?$book->getTitle():''?>">
					      	<?php if (!empty($titleError)): ?>
					      		<span class="help-inline"><?php echo $titleError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
										
					  <div class="control-group <?php echo !empty($overviewError)?'error':'';?>">
					    <label class="control-label">description</label>
					    <div class="controls">
					      	<input name="overview" type="text"  placeholder="description" value="<?php echo !empty($book->getOverview())?$book->getOverview():''?>">
					      	<?php if (!empty($overviewError)): ?>
					      		<span class="help-inline"><?php echo $overviewError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  
					  <div class="control-group <?php echo !empty($availabilityError)?'error':'';?>">
					    <label class="control-label">disponibilité</label>
					    <div class="controls">
							<input type="radio" name="availability" value="1" <?php echo $true ?> />oui 
							<input type="radio" name="availability" value="2" <?php echo $false ?>/>non
					      		<?php if (!empty($availabilityError)): ?>
					      		<span class="help-inline"><?php echo $availabilityError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($priceError)?'error':'';?>">
					    <label class="control-label">prix</label>
					    <div class="controls">
					      	<input name="price" type="text"  placeholder="prix" value=<?php echo !empty($book->getPrice())?$book->getPrice():''?>>
					      	<?php if (!empty($priceError)): ?>
					      		<span class="help-inline"><?php echo $priceError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($publisherError)?'error':'';?>">
					    <label class="control-label">éditeur</label>
					    <div class="controls">
					      	<input name="publisher" type="text"  placeholder="éditeur" value=<?php echo !empty($book->getPublisher())?$book->getPublisher():''?>>
					      	<?php if (!empty($publisherError)): ?>
					      		<span class="help-inline"><?php echo $publisherError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($publication_dateError)?'error':'';?>">
					    <label class="control-label">date de publication</label>
					    <div class="controls">
					      	<input name="publication_date" type="text"  placeholder="date de publication" value=<?php echo !empty($book->getPublication_date())?$book->getPublication_date():''?>>
					      	<?php if (!empty($publication_dateError)): ?>
					      		<span class="help-inline"><?php echo $publication_dateError;?></span>
					      	<?php endif; ?>aaaa-mm-jj
					    </div>
					  </div>
					  <div class="form-actions">
						  <button type="submit" class="btn btn-success">Mise a jour</button>
						  <a class="btn btn-info" href="javascript:history.back()">Retour</a>
						</div>
					</form>
				</div>
				
    </div> <!-- /container -->
	
	
</article>