<?php

/**
 * CRUD MEMBRE +++
 */

require_once constant("SITE_PATH") . "/src/model/dao/MembreDao.php";
require_once constant("SITE_PATH") . "/src/model/objet/Membre.php";

class MembreController
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
    
/***************************************
 * bloc formulaire + code de connexion *
 ***************************************/
    
    public function connexionMembre()
    {
    	$membre = MembreDao::connect();
		//$membre = MembreDao::read($id);
    
    	$view_path = constant("SITE_PATH") . "/src/vue/membre/profil.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    public function formConnexionMembre() 
    {  
    	$view_path = constant("SITE_PATH") . "/src/vue/membre/connexion.php";
    
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
    	$membre = MembreDao::delete($id);
    
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
    
/***************
 * page profil *
 ***************/
    
    public function profilMembre($id)
    {
    	$membre = MembreDao::read($id);
    
    	$view_path = constant("SITE_PATH") . "/src/vue/membre/profil.php";    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
     
/********************
 * page deconnexion *
 ********************/
    
    public function deConnexionMembre()
    {
    	//$membre = MembreDao::read($id);
    
    	$view_path = constant("SITE_PATH") . "/src/vue/membre/deconnexion.php";
    
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
  //////////////////
 //ADMINISTRATION//
//////////////////

 /********************
 * page profil admin *
 ********************/
    
    public function profilAdmin($id)
    {
    	$membre = MembreDao::read($id);
    
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/profil.php";    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
 
 /**************************************
  *     page read all admin   *
  **************************************/
          
    public function ADMreadAllMembre()
    {
    	$membre = MembreDao::readall();
    
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/read_all.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
 
 /************************************************
 * bloc formulaire + code de modification en DB *
 ************************************************/
	
   	public function ADMupdateMembreAction($id)
    {
    	$membre = MembreDao::update($id);
		
		$view_path = constant("SITE_PATH") . "/src/vue/admin/ADMread_update.php";
		
		require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    public function ADMformUpdateAction($id)
    {   
    	$membre = MembreDao::read($id);
    	    	
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/ADMupdate_form.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
/*************************
 * page delete compte db *
 *************************/ 
    
	
    public function ADMdeleteAction($id)
    {
    	$membre = MembreDao::delete($id); // appel fonction in DAOMembre
    
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/ADMvaliddelete.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
	public function ADMformDeleteAction($id)
    {    	
    	$membre = MembreDao::read($id);
		
		$view_path = constant("SITE_PATH") . "/src/vue/admin/ADMdelete.php";
    	 
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    } 
    
/*******
 * fin *
 * *****/ 
 
 /****************************************
  * bloc formulaire + code d'ajout en DB *
  ****************************************/
    
    public function ADMformCreateAction()
    {    	
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/ADMcreate_form.php";
    	 
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    } 
    public function ADMcreateAction()
    {
    	$membre = MembreDao::create();    
    	
		$view_path = constant("SITE_PATH") . "/src/vue/admin/ADMvalidcreate.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/ 

}
