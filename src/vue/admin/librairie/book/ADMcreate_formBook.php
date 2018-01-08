<article>
	<h1>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Catégorie client"
			class="ico_categorie" />Formulaire de création d'un livre
	</h1>

	<div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Ajouter un livre</h3>
		    		</div>
    		
	    			<form class="form-horizontal" action="ADMcreateBook" method="post">
					
					  <div class="control-group <?php echo !empty($titleError)?'error':'';?>">
					    <label class="control-label">titre</label>
					    <div class="controls">
					      	<input name="title" type="text"  placeholder="titre" value="<?php echo !empty($title)?$title:'';?>">
					      	<?php if (!empty($titleError)): ?>
					      		<span class="help-inline"><?php echo $titleError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($overviewError)?'error':'';?>">
					    <label class="control-label">description</label>
						<div class="controls">
					      	<input name="overview" type="text"  placeholder="description" value="<?php echo !empty($overview)?$overview:'';?>">
					      	<?php if (!empty($overviewError)): ?>
					      		<span class="help-inline"><?php echo $overviewError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php //echo !empty($availabilityError)?'error':'';?>">
					    <label class="control-label">disponibilité</label>
					    <div class="controls">
						<input type="radio" name="availability" value="1"/>oui 
						<input type="radio" name="availability" value="2"/>non
					      		<?php if (!empty($availabilityError)): ?>
					      		<span class="help-inline"><?php echo $availabilityError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($priceError)?'error':'';?>">
					    <label class="control-label">prix</label>
						<div class="controls">
					      	<input name="price" type="text"  placeholder="prix" value="<?php echo !empty($price)?$price:'';?>">
					      	<?php if (!empty($priceError)): ?>
					      		<span class="help-inline"><?php echo $priceError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($publisherError)?'error':'';?>">
					    <label class="control-label">éditeur</label>
						<div class="controls">
					      	<input name="publisher" type="text"  placeholder="éditeur" value="<?php echo !empty($publisher)?$publisher:'';?>">
					      	<?php if (!empty($publisherError)): ?>
					      		<span class="help-inline"><?php echo $publisherError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($publication_dateError)?'error':'';?>">
					    <label class="control-label">date de publication</label>
						<div class="controls">
					      	<input name="publication_date" type="text"  placeholder="date de publication" value="<?php echo !empty($publication_date)?$publication_date:'';?>">
					      	<?php if (!empty($publication_dateError)): ?>
					      		<span class="help-inline"><?php echo $publication_dateError;?></span>
					      	<?php endif; ?>aaaa/mm/jj
					    </div>
					  </div>
					  <div class="form-actions">
						  <button type="submit" class="btn btn-success">Valider</button>
						  <a class="btn btn-info" href=<?= constant('SITE_URL') ?>/profilAdmin/<?= $_SESSION['id']?>>Retour Administration</a>
						</div>
					</form>
				</div>
				
    </div> <!-- /container -->
	
	
</article>