<?php

/***************************************
* bloc formulaire + code d'ajout en DB *
****************************************/ 
		
		if ($action == "createmembre") //createmembre c'est le lien qui va apparaitre dans l'url
		// exemple URL : http://SITE/createmembre
		{
			$membreController = new MembreController();
			$membreController->createAction(); // createAction appel de la fonction dans page MembreControleur
		}
		else if ($action == "formcreatemembre") // page d'appel pour l'enregistrement d'un nouveau membre
		// exemple URL : http://SITE/formcreatemembre
		{
			$membreController = new MembreController();
			$membreController->formCreateAction();
		}
		
/*******
 * fin *
 * *****/
		
/***********************************************
*     bloc formulaire + code de connexion      *
************************************************/
		
		else if (($action == "connexionmembre"))
		// exemple URL : http://SITE/connexionmembre
		{
			$membreController = new MembreController();
			$membreController->connexionMembre();
		}
		else if (($action == "formconnexionmembre"))
		// exemple URL : http://SITE/formconnexionmembre
		{
			$membreController = new MembreController();
			$membreController->formConnexionMembre();
		}
		
/*******
 * fin *
 * *****/
		
/***********************************
 *    bloc code de deconnexion     *
 ***********************************/
		
		else if (($action == "deconnexionmembre"))
		// exemple URL : http://SITE/deconnexionmembre
		{
			$membreController = new MembreController();
			$membreController->deConnexionMembre();
		}		
		
/*******
 * fin *
 * *****/
		
/***********************************************
* bloc formulaire + code de modification en DB *
************************************************/
		
		else if (($action == "updatemembre")&& (isset($_GET["param1"])))
		// exemple URL : http://SITE/updatemembre
		{
			$membreController = new MembreController();
			$membreController->updateMembreAction($_GET["param1"]);
		}
		else if (($action == "formupdatemembre")&& (isset($_GET["param1"])))
		// exemple URL : http://SITE/formupdatemembre/1
		{
			$membreController = new MembreController();
			$membreController->formUpdateAction($_GET["param1"]);			
		}
		
/*******
 * fin *
 * *****/
		
/*********************************************
* bloc formulaire + code de connexion membre *
**********************************************/	
		
		else if (($action == "connexionmembre"))
		// exemple URL : http://SITE/connexionmembre
		{
			$membreController = new MembreController();
			$membreController->connexionMembre();
		}
		else if (($action == "formconnexionmembre"))
		// exemple URL : http://SITE/formconnexionmembre
		{
			$membreController = new MembreController();
			$membreController->formConnexionMembre();
		}
		
/*******
 * fin *
 * *****/

/******************************************
 *    bloc lire le contenu d'un membre    *
 ******************************************/
		
		else if (($action == "readmembre") && (isset($_GET["param1"])))
		// exemple URL : http://SITE/readmembre/1
		{
			$membreController = new MembreController();
			$membreController->readAction($_GET["param1"]);
		}
		
/*******
 * fin *
 * *****/
		
/**************************************************
 *    bloc lire le contenu de tous les membres    *
 **************************************************/
		
		else if (($action == "readallmembre"))
		// exemple URL : http://SITE/readallmembre
		{
			$membreController = new MembreController();
			$membreController->readAllMembre();
		}
		
/*******
 * fin *
 * *****/
 
 /*****************************************
 *    bloc lire le profil d'un membres    *
 ******************************************/
		
		else if (($action == "profilmembre") && (isset($_GET["param1"])))
		// exemple URL : http://SITE/profilmembre
		{
			$membreController = new MembreController();
			$membreController->profilMembre($_GET["param1"]);
		}
		
/*******
 * fin *
 * *****/

/***********************************
 *    bloc supprimer un membres    *
 ***********************************/
 
		else if (($action == "deleteAction") && (isset($_GET["param1"])))
		// exemple URL : http://SITE/formupdatemembre/1
		{
			$membreController = new MembreController();
			$membreController->DeleteAction($_GET["param1"]);			
		}
		else if (($action == "formDeleteAction") && (isset($_GET["param1"])))
		// exemple URL : http://SITE/deletemembre
		{
			$membreController = new MembreController();
			$membreController->formDeleteAction($_GET["param1"]);
		}
		
/* ************************/
/* ** fin action membre ***/
/* ************************/
	