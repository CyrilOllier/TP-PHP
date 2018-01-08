<?php

/**
 * Gestion CRUD Other +++
 */

//require_once constant("SITE_PATH") . "/src/model/dao/MembreDao.php";
//require_once constant("SITE_PATH") . "/src/model/objet/Membre.php";

class OtherController
{
/****************
 * page contact *
 ****************/
    
    public function contact()
    {    	    
    	$view_path = constant("SITE_PATH") . "/src/vue/other/contact.php";
		
		require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/	
 
/****************  
 * page importXML *
 ****************/
    
    public function ADMformImportXml()
    {    	    
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/importXml/index.php";
		
		require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/	
 
 }