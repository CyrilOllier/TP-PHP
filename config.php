<?php 
if(session_status() != PHP_SESSION_ACTIVE) {
	session_start();
}

if(!isset($_SESSION['id']) and !isset($_SESSION['pseudo']) )	
	{ 
		//var_dump("pas connecté");
		$loguer = "Connectez vous";
		$isloguer = false;
		session_destroy();
	}
else 
	{
		//var_dump("connecté");
		$loguer = $_SESSION['pseudo'];
		$isloguer = true;
	}
	// blocage des pages a ceux qui sont nom connecter
	$Page = $_SERVER['REQUEST_URI'];
	$valid = parse_url($Page, PHP_URL_PATH);
	$pathList = ($valid == "/profilmembre")||($valid == "/connexionmembre")||($valid == "/allLibrairie")||($valid == "/profilAdmin")||($valid == "/profilAdmin/1")||
	($valid == "/ADMreadallmembre")||($valid == "/ADMlibrairie");
	
	if($pathList && !$isloguer) 
		{
			//header("Location: membre/connexion.php");
			//echo "<script type='text/javascript'>document.location.replace(formconnexionmembre);</script>";
			$view_path = constant("SITE_PATH") . "/src/vue/error.php";
			require_once constant("SITE_PATH") . "/src/vue/page.php";
		}	
?>
