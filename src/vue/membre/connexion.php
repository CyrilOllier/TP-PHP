<article>
	<h1>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Catégorie client"
			class="ico_categorie" />Connexion membre
	</h1>
	<div class="container">
		    			<h3 style="text-align: center" id="forum">Connexion</h3>
	    			<form class="form-horizontal" action="connexionmembre" method="post">
					
					  <div id="transparent" class="control-group <?php echo !empty($pseudoError)?'error':'';?>">
					    <label class="control-label">pseudo</label>
					    <div id="noir" class="controls">
					      	<input name="pseudo" type="text"  placeholder="pseudo" value="<?php echo !empty($pseudo)?$pseudo:'';?>">
					      	<?php if (!empty($pseudoError)): ?>
					      		<span class="help-inline"><?php echo $pseudoError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div id="transparent" class="control-group <?php echo !empty($passError)?'error':'';?>">
					    <label class="control-label">password</label>
					    <div id="noir" class="controls">
					      	<input name="pass" type="password"  placeholder="Password" value="<?php echo !empty($pass)?$pass:'';?>">
					      	<?php if (!empty($passError)): ?>
					      		<span class="help-inline"><?php echo $passError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					<br/>
					  <div id="transparent" class="form-actions">
                          <a class="btn btn-info" href="index.php">Retour</a>
						  <button type="submit" class="btn btn-success">Connecter</button>
						</div>
					</form>
				
				
		</div> <!-- /container -->
	
	
	
	
</article>