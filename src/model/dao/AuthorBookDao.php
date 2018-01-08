<?php

require_once constant("SITE_PATH") . "/src/model/dao/Connection.php";
require_once constant("SITE_PATH") .  "/src/model/objet/AuthorBook.php";

class AuthorBookDao
{
		
	
	/** create authors books ok**/
		
	public static function addauthorbook()
	{
		if ( !empty($_POST))
			{
				// keep track validation errors
				$author_idError = null;
				$book_idError = null;				
	
				// keep track post values
				$author_id = $_POST['author_id'];
				$book_id = $_POST['book_id'];
								
	
				// validate input
				$valid = true;
				if (empty($author_id))
				{
					$author_idError = ' ';
					$valid = false;
				}
	
				if (empty($book_id))
				{
					$book_idError = ' ';
					$valid = false;
				}
					
				// insert data
				if ($valid)
				{
					$bdd = Connection::getConnection();
					$stmt = $bdd->prepare ("INSERT INTO authors_books(author_id, book_id) VALUES (?, ?)");
	
					if ($stmt->execute(array($_POST["author_id"], $_POST["book_id"])))
					{
						$authors_books = new AuthorBook();
						
						$authors_books->setAuthor_id($_POST["author_id"]);					
						$authors_books->setBook_id($_POST["book_id"]);					
						Connection::disconnect();
							
						return $authors_books;
					}
				}
			}
		}
	
	/** read ok**/
		
	public static function read($id)
	{
		$bdd = Connection::getConnection();
		$stmt = $bdd->prepare ("SELECT * FROM authors_books WHERE id = ?");
			
		if ($stmt->execute(array($id)))
		{
			$row = $stmt->fetch();

			$authors_books = new Authorbook();
			$authors_books->setId($row["id"]);
			$authors_books->setTitle($row["title"]);
				
			Connection::disconnect();
				
			return $authors_books;
		}
	}
	
	/** readall ok**/
		
	public static function readall()
	{
		$bdd = Connection::getConnection();
		$stmt = $bdd->prepare ("SELECT DISTINCT authors_books.author_id,authors_books.book_id,author.id,author.firstname,author.lastname,author.native_country,book.id,book.title,book.overview,book.availability,book.price 
								FROM authors_books 
								INNER JOIN author ON(authors_books.author_id = author.id) 
								INNER JOIN book ON(authors_books.book_id = book.id)");

		if ($stmt->execute(array()))
		{
			$authors_booksListe = array();
			while (($row = $stmt->fetch())!= false)
			{
				$authors_books = new Authorbook();				
				$authors_books->setBook_id($row["book_id"]);
				$authors_books->setAuthor_id($row["author_id"]);
				
				$authors_books = new Author();
				$authors_books->setId($row["author_id"]);
				$authors_books->setFirstname($row["firstname"]);
				$authors_books->setLastname($row["lastname"]);
				$authors_books->setNative_country($row["native_country"]);							
				
				
				
				array_push($authors_booksListe, $authors_books);
			}
		}
		Connection::disconnect();		
		return $authors_booksListe;
	}
	
	/** delete ok**/
		
	public static function delete($id)
	{
		$bdd = Connection::getConnection();
		$stmt = $bdd->prepare ("DELETE FROM authors_books WHERE book_id = ?");
		$stmt->execute(array($id));
		Connection::disconnect();
	}
	
}