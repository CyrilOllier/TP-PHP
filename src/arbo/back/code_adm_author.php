<?php

//Gestion  Auteur


/***************************************
* bloc read all ou page d'accueil gestion auteur *
****************************************/ 
 if (($action == "ADMreadAllAuthor"))		
			{
				$authorController = new AuthorController();
				$authorController->ADMreadAllAuthor();
			}
		
/*******
 * fin *
 * *****/

/*********************************************
* bloc formulaire + code d'ajout d'un auteur en DB *
**********************************************/ 
		
		else if ($action == "ADMcreateAuthor") //ADMcreateBook c'est le lien qui va apparaitre dans l'url
		// exemple URL : http://SITE/ADMcreateBook
		{
			$authorController = new AuthorController();
			$authorController->ADMcreateAuthor(); //ADMcreateBook appel de la fonction dans page BookControleur
		}
		else if ($action == "ADMcreateFormAuthor") // page d'appel pour l'enregistrement d'un nouveau book
		// exemple URL : http://SITE/ADMformcreateBook
		{
			$authorController = new AuthorController();
			$authorController->ADMcreateFormAuthor();
		}
		
/*******
 * fin *
 * *****/
		 
/***********************************************
* bloc formulaire + code de modification auteur en DB *
************************************************/
		
		else if (($action == "ADMupdateAuthor")&& (isset($_GET["param1"])))		
		{
			$authorController = new AuthorController();
			$authorController->ADMupdateAuthor($_GET["param1"]);
		}
		else if (($action == "ADMformUpdateAuthor")&& (isset($_GET["param1"])))		
		{
			$authorController = new AuthorController();
			$authorController->ADMformUpdateAuthor($_GET["param1"]);			
		}
		
/*******
 * fin *
 * *****/

/***********************************
 *    bloc supprimer un auteur    *
 ***********************************/
 
		else if (($action == "ADMdeleteAuthor") && (isset($_GET["param1"])))
		// exemple URL : http://SITE/formupdatemembre/1
		{
			$authorController = new AuthorController();
			$authorController->ADMdeleteAuthor($_GET["param1"]);			
		}
		else if (($action == "ADMformDeleteAuthor") && (isset($_GET["param1"])))
		// exemple URL : http://SITE/deletemembre
		{
			$authorController = new AuthorController();
			$authorController->ADMformDeleteAuthor($_GET["param1"]);
		}
		
/* ************************/
/* ** fin action auteur ***/
/* ************************/		