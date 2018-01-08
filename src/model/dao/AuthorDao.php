<?php

require_once constant("SITE_PATH") . "/src/model/dao/Connection.php";
require_once constant("SITE_PATH") .  "/src/model/objet/Author.php";

require_once constant("SITE_PATH") .  "/src/model/objet/Book.php";

class AuthorDao
{
		
	/** create ok**/
		
	public static function create()
	{
		if ( !empty($_POST))
		{
			// keep track validation errors
			$firstnameError = null;
			$lastnameError = null;
			$native_countryError = null;
			$birth_yearError = null;

			// keep track post values
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$native_country = $_POST['native_country'];
			$birth_year = $_POST['birth_year'];
			
			

			// validate input
			$valid = true;
			if (empty($firstname))
			{
				$firstnameError = 'Taper son prénom';
				$valid = false;
			}

			if (empty($lastname))
			{
				$lastnameError = 'Taper son nom';
				$valid = false;
			}

			if (empty($native_country))
			{
				$native_countryError = 'Taper son pays d\'origine';
				$valid = false;			
			}
			
			if (empty($birth_year))
			{
				$birth_yearError = 'Taper son année de naissance';
				$valid = false;			
			}
				
			// insert data
			if ($valid)
			{
				$bdd = Connection::getConnection();
				$stmt = $bdd->prepare ("INSERT INTO author(firstname, lastname, native_country, birth_year) VALUES (?, ?, ?, ?)");

				if ($stmt->execute(array($_POST["firstname"], $_POST["lastname"], $_POST["native_country"], $_POST["birth_year"])))
				{
					$author = new Author();
					$author->setId($bdd->lastInsertId());
					$author->setFirstname($_POST["firstname"]);					
					$author->setLastname($_POST["lastname"]);
					$author->setNative_country($_POST["native_country"]);
					$author->setBirth_year($_POST["birth_year"]);					
					Connection::disconnect();
						
					return $author;
				}
			}
		}
	}
		
	/** read ok**/
		
	public static function read($id)
	{
		$bdd = Connection::getConnection();
		$stmt = $bdd->prepare ("SELECT * FROM author WHERE id = ?");
			
		if ($stmt->execute(array($id)))
		{
			$row = $stmt->fetch();

			$author = new Author();
			$author->setId($row["id"]);
			$author->setFirstname($row["firstname"]);
			$author->setLastname($row["lastname"]);
			$author->setNative_country($row["native_country"]);
			$author->setBirth_year($row["birth_year"]);			
			Connection::disconnect();
				
			return $author;
		}
	}
	
		
	/** readall ok**/
		
	public static function readall()
	{
		$bdd = Connection::getConnection();
		$stmt = $bdd->prepare ("SELECT * FROM author ORDER BY id DESC");

		if ($stmt->execute(array()))
		{
			$authorListe = array();
			while (($row = $stmt->fetch())!= false)
			{
				$author = new Author();
				$author->setId($row["id"]);
				$author->setFirstname($row["firstname"]);
				$author->setLastname($row["lastname"]);
				$author->setNative_country($row["native_country"]);				
				$author->setBirth_year($row["birth_year"]);
				array_push($authorListe, $author);
			}
		}
		Connection::disconnect();		
		return $authorListe;
	}
	
	
	/** readalldistinct desc ok**/
		
	public static function readdistinctD($id)
	{		
		$bdd = Connection::getConnection();
		$stmt = $bdd->prepare ("SELECT * FROM author INNER JOIN authors_books ON (author.id = authors_books.author_id) where authors_books.book_id= ? ORDER BY author_id DESC");

		if ($stmt->execute(array($id)))
		{
			$authorListe = array();
			while (($row = $stmt->fetch())!= false)
			{
				$author = new Author();
				$author->setId($row["id"]);
				$author->setFirstname($row["firstname"]);
				$author->setLastname($row["lastname"]);
				$author->setNative_country($row["native_country"]);				
				$author->setBirth_year($row["birth_year"]);
				array_push($authorListe, $author);
			}
		}
		Connection::disconnect();		
		return $authorListe;
	}
	
	/** readalldistinct asc ok**/
		
	public static function readdistinctA($id)
	{		
		$bdd = Connection::getConnection();
		$stmt = $bdd->prepare ("SELECT * FROM author INNER JOIN authors_books ON (author.id = authors_books.author_id) where authors_books.book_id= ? ORDER BY author_id ASC");

		if ($stmt->execute(array($id)))
		{
			$authorListe = array();
			while (($row = $stmt->fetch())!= false)
			{
				$author = new Author();
				$author->setId($row["id"]);
				$author->setFirstname($row["firstname"]);
				$author->setLastname($row["lastname"]);
				$author->setNative_country($row["native_country"]);				
				$author->setBirth_year($row["birth_year"]);
				array_push($authorListe, $author);
			}
		}
		Connection::disconnect();		
		return $authorListe;
	}
	
		
	/** update ok**/
		
	public static function update($id)
	{		
		$bdd = Connection::getConnection();
		$stmt = $bdd->prepare ("UPDATE author set firstname = ?, lastname = ?, native_country = ?, birth_year = ? WHERE id = ?");
		$success = $stmt->execute(array($_POST["firstname"], $_POST["lastname"], $_POST["native_country"], $_POST["birth_year"], $id));
		Connection::disconnect();
	}
		
	/** delete ok**/
		
	public static function delete($id)
	{
		$bdd = Connection::getConnection();
		$stmt = $bdd->prepare ("DELETE FROM author WHERE id = ?");
		$stmt->execute(array($id));
		Connection::disconnect();
	}
		

		}