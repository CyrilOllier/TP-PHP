<?php include 'config.php' ?>

<!DOCTYPE html>
<html>
<head>
<link href="<?= constant("SITE_URL") ?>/styles/jquery.dataTables.min.css" rel="stylesheet">
<link href="<?= constant("SITE_URL") ?>/styles/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= constant("SITE_URL") ?>/styles/style.css" type="text/css" media="print, projection, screen" />
<title>Test MVC</title><!-- nom du site -->
</head>

<body>
	<div id="bloc_page">
        
	<?php
		include "header.php";

		include "section.php";

		//include "footer.php";
	?>
            
	</div>
</body>
</html>
