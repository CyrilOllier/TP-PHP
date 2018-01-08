<?php

//Gestion  Livre

/***************************************
* bloc read all ou page d'accueil gestion book *
****************************************/ 
 if (($action == "ADMlibrairie"))		
			{
				$bookController = new BookController();
				$bookController->librairie();
			}
		
		/**
		 * fin
		 */

/***************************************
* bloc formulaire + code d'ajout en DB *
****************************************/ 
		
		else if ($action == "ADMcreateBook") //ADMcreateBook c'est le lien qui va apparaitre dans l'url
		// exemple URL : http://SITE/ADMcreateBook
		{
			$bookController = new BookController();
			$bookController->ADMcreateBook(); //ADMcreateBook appel de la fonction dans page BookControleur
		}
		else if ($action == "ADMformcreateBook") // page d'appel pour l'enregistrement d'un nouveau book
		// exemple URL : http://SITE/ADMformcreateBook
		{
			$bookController = new BookController();
			$bookController->ADMformCreateBook();
		}
		
/*******
 * fin *
 * *****/
		 
/***********************************************
* bloc formulaire + code de modification d'un livre en DB *
************************************************/
		
		else if (($action == "ADMupdateBook")&& (isset($_GET["param1"])))		
		{
			$bookController = new BookController();
			$bookController->ADMupdateBook($_GET["param1"]);
		}
		else if (($action == "ADMformUpdateBook")&& (isset($_GET["param1"])))		
		{
			$bookController = new BookController();
			$bookController->ADMformUpdateBook($_GET["param1"]);			
		}
		
/*******
 * fin *
 * *****/


 
/***********************************
 *    bloc supprimer un livre    *
 ***********************************/
 
		else if (($action == "ADMdeleteBook") && (isset($_GET["param1"])))
		// exemple URL : http://SITE/formupdatemembre/1
		{
			$bookController = new BookController();
			$bookController->ADMDeleteBook($_GET["param1"]);			
		}
		else if (($action == "ADMformDeleteBook") && (isset($_GET["param1"])))
		// exemple URL : http://SITE/deletemembre
		{
			$bookController = new BookController();
			$bookController->ADMformDeleteBook($_GET["param1"]);
		}
		
/* ************************/
/* ** fin action book ***/
/* ************************/
