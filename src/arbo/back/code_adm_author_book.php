<?php

/********************************************************
* bloc formulaire + code d'assignation d'auteur a un livre en DB *
*********************************************************/ 
		
		if ($action == "ADMaddAuthor")//ADMcreateBook c'est le lien qui va apparaitre dans l'url
		// exemple URL : http://SITE/ADMcreateBook
		{
			$authorBookController = new AuthorBookController();
			$authorBookController->ADMaddAuthor(); //ADMcreateBook appel de la fonction dans page BookControleur
		}
		else if (($action == "ADMformAddAuthor") && (isset($_GET["param1"]))) 
		// exemple URL : http://SITE/ADMformcreateBook
		{
			$authorBookController = new AuthorBookController();
			$authorBookController->ADMformAddAuthor($_GET["param1"]);
		}

		
/***********************************
 *    bloc supprimer un auteur    *
 ***********************************/
 
		else if (($action == "ADMdeleteAuthorBook") && (isset($_GET["param1"])))
		// exemple URL : http://SITE/formupdatemembre/1
		{
			$authorBookController = new AuthorBookController();
			$authorBookController->ADMdeleteAuthorBook($_GET["param1"]);			
		}
		else if (($action == "ADMformDeleteAuthorBook") && (isset($_GET["param1"])))
		// exemple URL : http://SITE/deletemembre
		{
			$authorBookController = new AuthorBookController();
			$authorBookController->ADMformDeleteAuthorBook($_GET["param1"]);
		}
		
/*************************/
/** fin action authorsbook **/
/*************************/

