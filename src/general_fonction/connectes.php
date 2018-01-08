<?php

Function Connecte()
{
// Connexion à MySQL
//include "database.php";
// -------
// ETAPE 1 : on vérifie si l'IP se trouve déjà dans la table.
// Pour faire ça, on n'a qu'à compter le nombre d'entrées dont le champ "ip" est l'adresse IP du visiteur.
		
	$pdo = Database::connect();
	$sql =('SELECT COUNT(*) AS nbre_entrees FROM connectes WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
		foreach ($pdo->query($sql) as $row) 		
			{
				if ($row['nbre_entrees'] == 0) // L'IP ne se trouve pas dans la table, on va l'ajouter.
				{
					//var_dump("1 :" .$row['nbre_entrees']);
					$pdo = Database::connect();					
					$sql =('INSERT INTO connectes VALUES(\'' . $_SERVER['REMOTE_ADDR'] . '\', ' . time() . ')');
						foreach ($pdo->query($sql) as $row) 		
							{ }
					Database::disconnect();
					}
				else // L'IP se trouve déjà dans la table, on met juste à jour le timestamp.
				{
					//var_dump("2 :" .$row['nbre_entrees']);
					$pdo = Database::connect();
					$sql =('UPDATE connectes SET timestamp=' . time() . ' WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
						foreach ($pdo->query($sql) as $row) 		
							{ }
					Database::disconnect();
					}

// -------
// 2TAPE 2 : on supprime toutes les entrées dont le timestamp est plus vieux que 10 minutes.
// On stocke dans une variable le timestamp qu'il était il y a 10 minutes :
		$timestamp_10min = time() - (60 * 10); // 60 * 10 = nombre de secondes écoulées en 10 minutes
		$pdo = Database::connect();
		$sql =('DELETE FROM connectes WHERE timestamp < ' . $timestamp_10min);
		foreach ($pdo->query($sql) as $row) 		
							{ }
					Database::disconnect();
// -------
// ETAPE 3 : on compte le nombre d'IP stockées dans la table. C'est le nombre de visiteurs connectés.
			$pdo = Database::connect();
			$sql =('SELECT COUNT(*) AS nbre_entrees FROM connectes');			
			foreach ($pdo->query($sql) as $donnees) 			
				{
// -------
// ETAPE 4 : On n'a plus qu'à afficher le nombre de connectés !
					echo 'Il y a actuellement ';
					if( $donnees['nbre_entrees'] <=1)
						{
						echo $donnees['nbre_entrees']. ' visiteur connecté sur le site !';
						}
					else if ($donnees['nbre_entrees'] >=2)
						{
						echo $donnees['nbre_entrees']. ' visiteurs connectés sur le site !';
						}
					else if ($donnees['nbre_entrees'] ==0)
						{
						echo ' personne de connecté au site !';
						}
				}
					Database::disconnect();
			}
				Database::disconnect();
		return $donnees;
		//var_dump($donnees);
		}
?>

