<article>
	<h1>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Catégorie client"
			class="ico_categorie" />Mise a jour infos membre
	</h1>
	<?php 
	if($membre->getType_droit() == 0)
		{
			$true = 'checked="checked"';
			$false = '';
			$false1 = '';
		}
	else if ($membre->getType_droit() == 1)
		{
			$true = '';
			$false = 'checked="checked"';
			$false1 = '';
		}
	else
		{
			$true = '';
			$false = '';
			$false1 = 'checked="checked"';
		}
		?>
	
		
	<div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Mise a jour du profil</h3>
		    		</div>
    				<form class="form-horizontal" action="<?= constant('SITE_URL') ?>/updatemembre/<?= $membre->getId() ?>" method="post">
					
					  <div class="control-group <?php echo !empty($pseudoError)?'error':'';?>">
					    <label class="control-label">pseudo</label>
					    <div class="controls">
					      	<input name="pseudo" type="text"  placeholder="pseudo" value=<?php echo !empty($membre->getPseudo())?$membre->getPseudo():''?>>
					      	<?php if (!empty($pseudoError)): ?>
					      		<span class="help-inline"><?php echo $pseudoError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
										
					  <div class="control-group <?php echo !empty($passError)?'error':'';?>">
					    <label class="control-label">password</label>
					    <div class="controls">
					      	<input name="pass" type="text"  placeholder="retapé votre password" value=""> *
					      	<?php if (!empty($passError)): ?>
					      		<span class="help-inline"><?php echo $passError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  
					  <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
					    <label class="control-label">Email Address</label>
					    <div class="controls">
					      	<input name="email" type="text" placeholder="Email Address" value="<?php echo !empty($membre->getEmail())?$membre->getEmail():'';?>">
					      	<?php if (!empty($emailError)): ?>
					      		<span class="help-inline"><?php echo $emailError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($type_droitError)?'error':'';?>">
					    <label class="control-label">type de droit</label>
					    <div class="controls">
							<input type="radio" name="type_droit" value="0" <?php echo $true ?> />Admin 
							<input type="radio" name="type_droit" value="1" <?php echo $false ?>/>Utilisateur
							<input type="radio" name="type_droit" value="2" <?php echo $false1 ?>/>Moderateur
						
					      		<?php if (!empty($type_droitError)): ?>
					      		<span class="help-inline"><?php echo $type_droitError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  
					 
					  
					  <div class="control-group <?php echo !empty($date_naissanceError)?'error':'';?>">
					    <label class="control-label">Date de naissance</label>
					    <div class="controls">
					      	<input name="date_naissance" type="text"  placeholder="date de naissance" value="<?php echo !empty($membre->getDate_naissance())?$membre->getDate_naissance():'';?>">
					      	<?php if (!empty($date_naissanceError)): ?>
					      		<span class="help-inline"><?php echo $date_naissanceError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>				  
					   <input type="hidden" name="date_enregistrement" value=<?= $membre->getDate_enregistrement()?>>
					  <div class="form-actions">
						  <button type="submit" class="btn btn-success">Mise a jour</button>
						  <a class="btn btn-info" href="javascript:history.back()">Retour</a>
						</div>
					</form>
				</div>
				
    </div> <!-- /container -->
	
	
</article>