<article>
    <div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Suppréssion des auteurs du livre</h3>
		    		</div>
		    		
	    			<form class="form-horizontal" action="<?= constant('SITE_URL') ?>/ADMdeleteAuthorBook/<?= $book->getId() ?>" method="post">
	    			  <input type="hidden" name="id" value="<?php echo $id;?>"/>
					  <p class="alert alert-error">Etes vous sur de vouloir supprimer les auteurs de ce livre ?</p>
					  <div class="form-actions">
						  <button type="submit" class="btn btn-danger">Oui</button>
						  <a class="btn btn-secondary" href="javascript:history.back()">Retour</a>
						  
						</div>
					</form>
				</div>
				
    </div> <!-- /container -->
  </article>