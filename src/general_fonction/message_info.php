<?php
Function Message()
{
// Connexion à MySQL
include "database.php";

	$pdo = Database::connect();
	$sql =('SELECT * FROM info_message WHERE id=1');
		foreach ($pdo->query($sql) as $row) 		
			{ ?>
				<center><MARQUEE DIRECTION="UP" HEIGHT="35" SCROLLDELAY="450">
				<?php
				echo "<center>" .$row['info']."<br>";
				echo "<a href=" .$row['link']. "><b>".$row['link']."</b></a>";
				echo "</MARQUEE ></center>";
			}
			
				Database::disconnect();
		return ;
		//var_dump($donnees);
		}
?>

