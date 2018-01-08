
<header>
	<div id="titre_principal">
		<div id="logo">
			<!--img src="<?= constant("SITE_URL") ?>/images/zozor_logo.png" alt="Logo de Zozor" /-->
			
		</div>		
	</div>
	<div id="info">
		<table>
			<tr>
		<?php
				// appel pages des messages d'information du site
require_once"/src/general_fonction/message_info.php"; ?>
				<td align="center" width="1000"><b><?php  $infos = Message(); ?></b></td>
			</tr>
		</table>
	
	<?php	
// formatage de l'heure afficher : heure minutes seconde      
$date = date("d-m-Y");
$heure = date('H:i:s');

?>
	<!--div id="info"-->
		<table>
		
			<tr>			
				<td align="left" width="550"><b>Nous somme le : <?php echo $date ; ?> Il est : <?php echo $heure ; ?></b></td>
				
				<?php
				// appel pages des ustilisateurs connecter
require_once"/src/general_fonction/connectes.php"; ?>

				<td align="right" width="400"><b><?php  $connect = Connecte(); ?></b></td>
			</tr>
		</table>
	</div>
	
	
</header>