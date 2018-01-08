<?php

/**
 * Gestion CRUD Author +++
 */

require_once constant("SITE_PATH") . "/src/model/dao/AuthorDao.php";
require_once constant("SITE_PATH") . "/src/model/objet/Author.php";

class AuthorController
{

/************************************************
 * bloc formulaire + code de modification en DB *
 ************************************************/
	
   	public function updateMembreAction($id)
    {
    	$membre = MembreDao::update($id);
		
		$view_path = constant("SITE_PATH") . "/src/vue/membre/read_update.php";
		
		require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    public function formUpdateAction($id)
    {   
    	$membre = MembreDao::read($id);
    	    	
    	$view_path = constant("SITE_PATH") . "/src/vue/membre/update_form.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
    
    
/*************************
 * page delete compte db *
 *************************/ 
    
	
    public function deleteAction($id)
    {
    	$membre = MembreDao::membredelete($id);
    
    	$view_path = constant("SITE_PATH") . "/src/vue/membre/validdelete.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
	public function formDeleteAction($id)
    {    	
    	$view_path = constant("SITE_PATH") . "/src/vue/membre/delete.php";
    	 
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    } 
    
/*******
 * fin *
 * *****/
   
/**********************
 * page read compte db *
 **********************/
    
    public function readAction($id)
    {
    	$membre = MembreDao::read($id);
    
    	$view_path = constant("SITE_PATH") . "/src/vue/membre/read.php";
		
		require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
 
/**************************************
  *     page read all     *
  **************************************/
          
    public function readAllMembre()
    {
    	$membre = MembreDao::readall();
    
    	$view_path = constant("SITE_PATH") . "/src/vue/membre/read_all.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/    
    
 /****************************************
  * bloc formulaire + code d'ajout en DB *
  ****************************************/
    
    public function formCreateAction()
    {    	
    	$view_path = constant("SITE_PATH") . "/src/vue/membre/create_form.php";
    	 
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    } 
    public function createAction()
    {
    	$membre = MembreDao::create();
    
    	$view_path = constant("SITE_PATH") . "/src/vue/membre/read.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
 
  //////////////////////
 //ADMINISTRATION//
//////////////////////

 
 /**************************************
  *     page read all admin   *
  **************************************/
          
    public function ADMreadAllAuthor()
    {
    	$author = AuthorDao::readall();
    
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/author/ADMreadAllAuthor.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
 
 /************************************************
 * bloc formulaire + code de modification en DB *
 ************************************************/
	
   	public function ADMupdateAuthor($id)
    {
    	$author = AuthorDao::update($id);
		
		$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/author/ADMupdateAuthor.php";
		
		require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    public function ADMformUpdateAuthor($id)
    {   
    	$author = AuthorDao::read($id);
    	    	
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/author/ADMformUpdateAuthor.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
/*************************
 * page delete compte db *
 *************************/ 
    
	
    public function ADMdeleteAuthor($id)
    {
    	$author = AuthorDao::delete($id);
    
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/author/ADMdeleteAuthor.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
	public function ADMformDeleteAuthor($id)
    {    	
    	$author = AuthorDao::read($id);
		
		$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/author/ADMformDeleteAuthor.php";
    	 
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    } 
    
/*******
 * fin *
 * *****/ 
 
 /****************************************
  * bloc formulaire + code d'ajout en DB *
  ****************************************/
    
    public function ADMcreateFormAuthor()
    {    	
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/author/ADMcreateFormAuthor.php";
    	 
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    } 
    public function ADMcreateAuthor()
    {
    	$author = AuthorDao::create();   
    	
		$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/author/ADMcreateAuthor.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
}
