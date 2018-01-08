<?php

/***************************************
* bloc read all ou page d'accueil gestion book  *
****************************************/ 
if (($action == "allLibrairie"))		
			{
				$authorBookController = new AuthorBookController();
				$authorBookController->allLibrairie();
			}
		
/******
*  fin  *
*******/



