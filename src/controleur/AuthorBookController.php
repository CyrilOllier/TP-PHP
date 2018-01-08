<?php

/**
 * Gestion CRUD AUTHOR_BOOK +++
 */

require_once constant("SITE_PATH") . "/src/model/dao/AuthorBookDao.php";
require_once constant("SITE_PATH") . "/src/model/objet/AuthorBook.php";
/**
ajout des DAO et objet pour liaison
**/
require_once constant("SITE_PATH") . "/src/model/dao/AuthorDao.php";
require_once constant("SITE_PATH") . "/src/model/objet/Author.php";
require_once constant("SITE_PATH") . "/src/model/dao/BookDao.php";
require_once constant("SITE_PATH") . "/src/model/objet/Book.php";

class AuthorBookController
{
 
 /*****************************************************
  * bloc formulaire + code d'ajout d'un author a un book en DB *
  ******************************************************/
    
    public function ADMformAddAuthor($id)
    {   
		$book = BookDao::read($id);
		$authors = AuthorDao::readall();		
		
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/authors_books/ADMformAddAuthor.php";
    	 
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    } 
    public function ADMaddAuthor()
    {			
    	$authors_books = AuthorBookDao::addauthorbook();    
    	
		$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/authors_books/ADMaddAuthor.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
 
 /*************************
 * page delete compte db *
 *************************/ 
    
	
    public function ADMdeleteAuthorBook($id)
    {
    	$authors_books = AuthorBookDao::delete($id);
    
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/authors_books/ADMdeleteAuthorBook.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
	public function ADMformDeleteAuthorBook($id)
    {   
		$book = BookDao::read($id);
    	$view_path = constant("SITE_PATH") . "/src/vue/admin/librairie/authors_books/ADMformDeleteAuthorBook.php";
    	 
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    } 
    
/*******
 * fin *
 * *****/
 
 ////////////////////
 /////// front //////
 /////////////////
 
/****************************************************
  *     page read all authors_books  (book desc auteur acs  1 *
  ****************************************************/
          
   public function allLibrairie()
    {	
		$book = BookDao::readall();
		
    	$view_path = constant("SITE_PATH") . "/src/vue/librairie/book/allLibrairie.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
 
 
 
 /*******************************************************
  *     page read all authors_books (book asc et auteur desc)  Test * 
  *******************************************************/
          
   public function allTLibrairie()
    {	
		$book = BookDao::readall();
		
    	$view_path = constant("SITE_PATH") . "/src/vue/librairie/book/allTLibrairie.php";
    
    	require_once constant("SITE_PATH") . "/src/vue/page.php";
    }
    
/*******
 * fin *
 * *****/
 
 
}
