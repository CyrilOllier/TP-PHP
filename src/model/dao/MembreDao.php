<?php

require_once constant("SITE_PATH") . "/src/model/dao/Connection.php";
require_once constant("SITE_PATH") .  "/src/model/objet/Membre.php";
	
	class MembreDao
		{
					
/** create ok**/
			
			public static function create()
			{
				if ( !empty($_POST)) 
				{
					// keep track validation errors
					$pseudoError = null;
					$passError = null;
					$emailError = null;
					$date_naissanceError = null;
				
					// keep track post values
					$pseudo = $_POST['pseudo'];
					$pass = $_POST['pass'];
					$email = $_POST['email'];
					$type_droit = $_POST['type_droit'];
					$date_naissance = $_POST['date_naissance'];
				
					// validate input
					$valid = true;
					if (empty($pseudo)) 
						{
							$pseudoError = 'Taper votre pseudo';
							$valid = false;
						}
				
					if (empty($pass)) 
						{
							$passError = 'Taper votre password';
							$valid = false;
						}
				
					if (empty($email)) 
						{
							$emailError = 'Taper votre Adresse Email';
							$valid = false;
						} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
							$emailError = 'Taper une Addresse Email valide';
							$valid = false;
						}
					
					if (empty($type_droit)) 
						{
							$type_droitError = ' ';
							$valid = false;
						}
				
					if (empty($date_naissance)) 
						{
							$date_naissanceError = 'Taper votre date de naissance SVP';
							$valid = false;
						}
					// convertion du password en sha1
					$pass_hache = sha1($_POST['pass']);
					// insert data
					if ($valid) 
					{					
						$bdd = Connection::getConnection();
						$stmt = $bdd->prepare ("INSERT INTO membre(pseudo, pass, email, type_droit, date_naissance, date_enregistrement) VALUES (?, ?, ?, ?, ?, NOW())");
				
						if ($stmt->execute(array($_POST["pseudo"], $pass_hache, $_POST["email"], $_POST["type_droit"], $_POST["date_naissance"])))
							{						
								$membre = new Membre();
								$membre->setId($bdd->lastInsertId());
								$membre->setPseudo($_POST["pseudo"]);
								$membre->setPass($pass_hache);
								$membre->setEmail($_POST["email"]);
								$membre->setType_droit($_POST["type_droit"]);
								$membre->setDate_naissance($_POST["date_naissance"]);	
								Connection::disconnect();
					
								return $membre;
							}
					}
				}
			}
			
/** read ok**/
			
			public static function read($id)
			{							
					$bdd = Connection::getConnection();
					$stmt = $bdd->prepare ("SELECT * FROM membre WHERE id = ?");
			
					if ($stmt->execute(array($id)))
						{
							$row = $stmt->fetch();							
								
							$membre = new Membre();
							$membre->setId($row["id"]);
							$membre->setPseudo($row["pseudo"]);
			 				$membre->setPass($row["pass"]);
							$membre->setEmail($row["email"]);
							$membre->setType_droit($row["type_droit"]);
							$membre->setDate_naissance($row["date_naissance"]);
							$membre->setDate_enregistrement($row["date_enregistrement"]);
							Connection::disconnect();
							
							return $membre;
						}				
			}
			
/** readall ok**/
			
			public static function readall()
			{		
					$bdd = Connection::getConnection();
					$stmt = $bdd->prepare ("SELECT * FROM membre ORDER BY id DESC");
								
					if ($stmt->execute(array()))
						{
							$membreListe = array();
							while (($row = $stmt->fetch())!= false)
							{					
								
								$membre = new Membre();
								$membre->setId($row["id"]);
								$membre->setPseudo($row["pseudo"]);
								$membre->setPass($row["pass"]);
								$membre->setEmail($row["email"]);
								$membre->setType_droit($row["type_droit"]);
								$membre->setDate_naissance($row["date_naissance"]);
								$membre->setDate_enregistrement($row["date_enregistrement"]);
								
								array_push($membreListe, $membre);
							}
						}						
						Connection::disconnect();
					//var_dump($membreListe);
					return $membreListe;
			}
			
/** update ok**/	
			
			public static function update($id)
			{	
				$pass_hache = sha1($_POST['pass']);
				$bdd = Connection::getConnection();
				$stmt = $bdd->prepare ("UPDATE membre set pseudo = ?, pass = ?, email = ?, type_droit = ?, date_naissance = ? WHERE id = ?");
				$success = $stmt->execute(array($_POST["pseudo"], $pass_hache, $_POST["email"], $_POST["type_droit"], $_POST["date_naissance"], $id));
				Connection::disconnect();
			}
			
/** delete ok**/	
			
			public static function delete($id)
			{
				$bdd = Connection::getConnection();
				$stmt = $bdd->prepare ("DELETE FROM membre WHERE id = ?");					
				$stmt->execute(array($id));	
				Connection::disconnect();					
			}
			
/** connect ok**/	
			
			public static function connect()
			{
				if ( !empty($_POST)) 
					{
						// verification que ce n'est pas vide
						$pseudoError = null;
						$passError = null;
							
						// transformation en variable de ceux qui a etais poster
						$pseudo = $_POST['pseudo'];
						$pass = $_POST['pass'];
							
						// si un champ est oublier alors on fait un rappel a l'ordre
						$valid = true;
						if (empty($pseudo))
							{
								$pseudoError = 'Taper votre pseudo';
								$valid = false;
							}
					
						if (empty($pass))
							{
								$passError = 'Taper votre password';
								$valid = false;
							}
					
						if ($valid) 
						{
							
							$pass_hache = sha1($_POST['pass']);
							$bdd = Connection::getConnection();
							$sql = $bdd->prepare('SELECT id FROM membre WHERE pseudo = :pseudo AND pass = :pass');
							$sql->execute(array(
									
									':pseudo' => $pseudo,
									':pass' => $pass_hache));
									
							$resultat = $sql->fetch();
					
							if (!$resultat)
							{
								echo '<p><center>Mauvais identifiant ou mot de passe !</p></center>';
								//header("Location: connexion.php");
							}
							else
							{
								session_start();																
								$_SESSION['id'] = $resultat['id'];
								$_SESSION['pseudo'] = $pseudo;
								
		// creation de l'objet mmebre						
								$membre  = new Membre();								
								$membre->setId($_SESSION['id']);
		// fin de creation de l'objet membre
								?>
								<article>
								<div class="container">
								 <?php echo '<center>Content de vous revoir parmis nous ' . $_SESSION['pseudo'] . '<br>Vous êtes connecté !</center>';
							}
							Connection::disconnect(); ?>
							<div>
							</article>
								<?php 							
						}
					}				
			}
		}