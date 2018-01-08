<?php

require_once constant("SITE_PATH") . "/src/model/dao/Connection.php";
require_once constant("SITE_PATH") .  "/src/model/objet/Book.php";


class BookDao
{
		
	/** create ok**/
		
	public static function create()
	{
	//var_dump($_POST);
		if ( !empty($_POST))
		{
			// keep track validation errors
			$titleError = null;
			$availabilityError = null;
			$priceError = null;
			$overviewError = null;
			$publisherError = null;
			$publication_dateError = null;

			// keep track post values
			$title = $_POST['title'];			
			$availability = $_POST['availability'];
			$price = $_POST['price'];
			$overview = $_POST['overview'];
			$publisher = $_POST['publisher'];
			$publication_date = $_POST['publication_date'];
			

			// validate input
			$valid = true;
			if (empty($title))
			{
				$titleError = 'Taper le titre';
				$valid = false;
			}

			if (empty($availability))
			{
				$availabilityError = 'Taper la disponibilité';
				$valid = false;
			}

			if (empty($price))
			{
				$priceError = 'Taper son prix';
				$valid = false;
			} 
				
			if (empty($overview))
			{
				$overviewError = 'Taper la description';
				$valid = false;
			}	

			if (empty($publisher))
			{
				$publisherError = 'Taper la maison de production';
				$valid = false;
			}
			if (empty($publication_date))
			{
				$publication_dateError = 'Taper la date du publication';
				$valid = false;
			}				
			
			// insert data
			if ($valid)
			{
				$bdd = Connection::getConnection();
				$stmt = $bdd->prepare ("INSERT INTO book(title, availability, price, overview, publisher, publication_date) VALUES (?, ?, ?, ?, ?, ?)");

				if ($stmt->execute(array($_POST["title"], $_POST["availability"], $_POST["price"], $_POST["overview"], $_POST["publisher"], $_POST["publication_date"])))
				{
					$book = new Book();
					$book->setId($bdd->lastInsertId());
					$book->setTitle($_POST["title"]);					
					$book->setAvailability($_POST["availability"]);
					$book->setPrice($_POST["price"]);
					$book->setOverview($_POST["overview"]);
					$book->setPublisher($_POST["publisher"]);
					$book->setpublication_date($_POST["publication_date"]);
					Connection::disconnect();
						
					return $book;
				}
			}
		}
	}
		
	/** read ok**/
		
	public static function read($id)
	{
		$bdd = Connection::getConnection();
		$stmt = $bdd->prepare ("SELECT * FROM book WHERE id = ?");
			
		if ($stmt->execute(array($id)))
		{
			$row = $stmt->fetch();

			$book = new Book();
			$book->setId($row["id"]);
			$book->setTitle($row["title"]);
			$book->setAvailability($row["availability"]);			
			$book->setPrice($row["price"]);
			$book->setOverview($row["overview"]);
			$book->setPublisher($row["publisher"]);
			$book->setpublication_date($row["publication_date"]);			
			Connection::disconnect();
				
			return $book;
		}
	}
	
	
	/** readall desc ok**/
		
	public static function readall()
	{
		$bdd = Connection::getConnection();
		$stmt = $bdd->prepare ("SELECT * FROM book ");		

		if ($stmt->execute(array()))
		{
			$bookListe = array();
			while (($row = $stmt->fetch())!= false)
			{

				$book = new Book();
				$book->setId($row["id"]);
				$book->setTitle($row["title"]);
				$book->setAvailability($row["availability"]);
				$book->setPrice($row["price"]);
				$book->setOverview($row["overview"]);
				$book->setPublisher($row["publisher"]);
				$book->setpublication_date($row["publication_date"]);				
				array_push($bookListe, $book);
			}
		}
		Connection::disconnect();		
		return $bookListe;
	}
		
	/** update ok**/
		
	public static function update($id)
	{		
		$bdd = Connection::getConnection();
		$stmt = $bdd->prepare ("UPDATE book set title = ?, availability = ?, price = ?, overview = ? , publisher = ? , publication_date = ? WHERE id = ?");
		$success = $stmt->execute(array($_POST["title"], $_POST["availability"], $_POST["price"], $_POST["overview"], $_POST["publisher"], $_POST["publication_date"], $id));
		Connection::disconnect();
	}
		
	/** delete ok**/
		
	public static function bookdelete($id)
	{
		$bdd = Connection::getConnection();
		$stmt = $bdd->prepare ("DELETE FROM book WHERE id = ?");
		$stmt->execute(array($id));
		Connection::disconnect();
	}
	



		}