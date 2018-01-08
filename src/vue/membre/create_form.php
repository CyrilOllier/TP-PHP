<article>
	<h1>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Catégorie client"
			class="ico_categorie" />Formulaire de création d'un membre
	</h1>

	<div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Inscription</h3>
		    		</div>
    		
	    			<form class="form-horizontal" action="createmembre" method="post">
					
					  <div class="control-group <?php echo !empty($pseudoError)?'error':'';?>">
					    <label class="control-label">pseudo</label>
					    <div class="controls">
					      	<input name="pseudo" type="text"  placeholder="pseudo" value="<?php echo !empty($pseudo)?$pseudo:'';?>">
					      	<?php if (!empty($pseudoError)): ?>
					      		<span class="help-inline"><?php echo $pseudoError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($passError)?'error':'';?>">
					    <label class="control-label">password</label>
					    <div class="controls">
					      	<input name="pass" type="password"  placeholder="Password" value="<?php echo !empty($pass)?$pass:'';?>">
					      	<?php if (!empty($passError)): ?>
					      		<span class="help-inline"><?php echo $passError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
					    <label class="control-label">Addresse Email </label>
					    <div class="controls">
					      	<input name="email" type="text" placeholder="Addresse Email " value="<?php echo !empty($email)?$email:'';?>">
					      	<?php if (!empty($emailError)): ?>
					      		<span class="help-inline"><?php echo $emailError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>					  
					      	<input name="type_droit" type="hidden" value="1">					      	
					    
					  <div class="control-group <?php echo !empty($date_naissanceError)?'error':'';?>">
					    <label class="control-label">Date de Naissance <i>(jj/mm/aaaa)</i></label>
					    <div class="controls">
					      	<input name="date_naissance" type="text"  placeholder="Date de Naissance" value="<?php echo !empty($date_naissance)?$date_naissance:'';?>">
					      	<?php if (!empty($date_naissanceError)): ?>
					      		<span class="help-inline"><?php echo $date_naissanceError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="form-actions">
						  <button type="submit" class="btn btn-success">Valider</button>
						  <a class="btn btn-info" href="index.php">Retour</a>
						</div>
					</form>
				</div>
				
    </div> <!-- /container -->
	
	
</article>