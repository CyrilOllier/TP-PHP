<article>
	<h1>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Catégorie client"
			class="ico_categorie" />Formulaire de création d'un auteur
	</h1>

	<div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Ajouter un auteur</h3>
		    		</div>
    		
	    			<form class="form-horizontal" action="ADMcreateAuthor" method="post">
					
					  <div class="control-group <?php echo !empty($firstnameError)?'error':'';?>">
					    <label class="control-label">prénom</label>
					    <div class="controls">
					      	<input name="firstname" type="text"  placeholder="prénom" value="<?php echo !empty($firstname)?$firstname:'';?>">
					      	<?php if (!empty($firstnameError)): ?>
					      		<span class="help-inline"><?php echo $firstnameError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($lastnameError)?'error':'';?>">
					    <label class="control-label">nom</label>
						<div class="controls">
					      	<input name="lastname" type="text"  placeholder="nom" value="<?php echo !empty($lastname)?$lastname:'';?>">
					      	<?php if (!empty($lastnameError)): ?>
					      		<span class="help-inline"><?php echo $lastnameError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>					  
					  <div class="control-group <?php echo !empty($native_countryError)?'error':'';?>">
					    <label class="control-label">pays d'origine</label>
						<div class="controls">
					      	<input name="native_country" type="text"  placeholder="pays d'origine" value="<?php echo !empty($native_country)?$native_country:'';?>">
					      	<?php if (!empty($native_countryError)): ?>
					      		<span class="help-inline"><?php echo $native_countryError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($birth_yearError)?'error':'';?>">
					    <label class="control-label">Année de naissance</label>
						<div class="controls">
					      	<input name="birth_year" type="text"  placeholder="Année de naissance" value="<?php echo !empty($birth_year)?$birth_year:'';?>">
					      	<?php if (!empty($birth_yearError)): ?>
					      		<span class="help-inline"><?php echo $birth_yearError;?></span>
					      	<?php endif; ?>aaaa
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