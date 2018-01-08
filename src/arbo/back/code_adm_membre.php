<?php
/**
* 	Gestion des URL du site plus appel des action du controleur associé
*/

/**************************************************
 *    gestion profil admin    *
 **************************************************/
 if (($action == "profilAdmin") && (isset($_GET["param1"])))
		// exemple URL : http://SITE/profilAdmin
		{
			$membreController = new MembreController();
			$membreController->profilAdmin($_GET["param1"]);// appel fonction 
		}

/*******
 * fin *
 * *****/		
 
/**************************************************
 *    bloc lire le contenu de tous les membres    *
 **************************************************/
		
		else if (($action == "ADMreadallmembre"))
		
		{
			$membreController = new MembreController();
			$membreController->ADMreadAllMembre();
		}
		
/*******
 * fin *
 * *****/
 
 /***********************************************
* bloc formulaire + code de modification en DB *
************************************************/
		
		else if (($action == "ADMupdatemembre")&& (isset($_GET["param1"])))
		// exemple URL : http://SITE/updatemembre
		{
			$membreController = new MembreController();
			$membreController->ADMupdateMembreAction($_GET["param1"]);
		}
		else if (($action == "ADMformupdatemembre")&& (isset($_GET["param1"])))
		// exemple URL : http://SITE/formupdatemembre/1
		{
			$membreController = new MembreController();
			$membreController->ADMformUpdateAction($_GET["param1"]);			
		}
		
/*******
 * fin *
 * *****/
 
 /***************************************
* bloc formulaire + code d'ajout en DB *
****************************************/ 
		
		else if ($action == "ADMcreatemembre") //createmembre c'est le lien qui va apparaitre dans l'url
		// exemple URL : http://SITE/createmembre
		{
			$membreController = new MembreController();
			$membreController->ADMcreateAction(); // createAction appel de la fonction dans page MembreControleur
		}
		else if ($action == "ADMformcreatemembre") // page d'appel pour l'enregistrement d'un nouveau membre
		// exemple URL : http://SITE/formcreatemembre
		{
			$membreController = new MembreController();
			$membreController->ADMformCreateAction();
		}
		
/*******
 * fin *
 * *****/
 
 /***********************************
 *    bloc supprimer un membres    *
 ***********************************/
 
		else if (($action == "ADMdeleteAction") && (isset($_GET["param1"])))
		// exemple URL : http://SITE/formupdatemembre/1
		{
			$membreController = new MembreController();
			$membreController->ADMDeleteAction($_GET["param1"]);			
		}
		else if (($action == "ADMformDeleteAction") && (isset($_GET["param1"])))
		// exemple URL : http://SITE/deletemembre
		{
			$membreController = new MembreController();
			$membreController->ADMformDeleteAction($_GET["param1"]);
		}
		
/* ************************/
/* ** fin action membre ***/
/* ************************/



