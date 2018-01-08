<?php

/**
 * Gestion CRUD BOOK +++
 */

require_once constant("SITE_PATH") . "/src/model/dao/BookDao.php";
require_once constant("SITE_PATH") . "/src/model/objet/Book.php";

class BookController
{

/************************************************
 * bloc formulaire + code Update en DB *
 ************************************************/
	
   	public function updateBookAction($id)
    {
    	$book = BookDao::update($id);
		
		$view_path = constant("SITE_PATH") . "/src/vue/librairie/book/read_update.php";
		
		require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    public function formUpdateAction($id)
    {   
    	$book = bookDao::read($id);
    	    	
    	$view_path = constant("SITE_PATH") . "/src/vue/librairie/book/update_form.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/


 
/*************************
 * page  code Delete  db *
 *************************/ 
    
	
    public function deleteAction($id)
    {
    	$book = bookDao::bookdelete($id);
    
    	$view_path = constant("SITE_PATH") . "/src/vue/librairie/book/validdelete.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
	public function formDeleteAction($id)
    {    	
    	$view_path = constant("SITE_PATH") . "/src/vue/librairie/book/delete.php";
    	 
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    } 
    
/*******
 * fin *
 * *****/
   
/**********************
 * page code Read db *
 **********************/
    
    public function readAction($id)
    {
    	$book = bookDao::read($id);
    
    	$view_path = constant("SITE_PATH") . "/src/vue/librairie/book/read.php";
		
		require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
 
    
 /****************************************
  * bloc formulaire + code Create en DB *
  ****************************************/
    
    public function formCreateAction()
    {    	
    	$view_path = constant("SITE_PATH") . "/src/vue/librairie/book/create_form.php";
    	 
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    } 
    public function createAction()
    {
    	$book = bookDao::create();
    
    	$view_path = constant("SITE_PATH") . "/src/vue/librairie/book/read.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
 
  //////////////////
 //ADMINISTRATION//
//////////////////
 
 /**************************************
  *     page read all books  *
  **************************************/
          
    public function librairie()
    {
    	$book = bookDao::readall();
    
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/book/read_all.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
 
 /************************************************
 * bloc formulaire + code de modification en DB *
 ************************************************/
	
   	public function ADMupdateBook($id)
    {
    	$book = bookDao::update($id);
		
		$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/book/ADMread_update.php";
		
		require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    public function ADMformUpdateBook($id)
    {   
    	$book = bookDao::read($id);
    	    	
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/book/ADMupdate_form.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
 
/*************************
 * page delete livre db *
 *************************/ 
    
	
    public function ADMdeleteBook($id)
    {
    	$book = bookDao::bookdelete($id);
    
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/book/ADMvalidDeleteBook.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
	public function ADMformDeleteBook($id)
    {    	
    	$book = bookDao::read($id);
		
		$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/book/ADMdeleteBook.php";
    	 
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    } 
    
/*******
 * fin *
 * *****/ 
 
 /****************************************
  * bloc formulaire + code d'ajout book en DB *
  ****************************************/
    
    public function ADMformCreateBook()
    {    	
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/book/ADMcreate_formBook.php";
    	 
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    } 
    public function ADMcreateBook()
    {
    	$book = bookDao::create();    
    	
		$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/book/ADMcreateBook.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
 
 
}
