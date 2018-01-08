<?php //include('/src/general_fonction/connectes.php'); ?>
<article>
	<h4>
		<img src="<?= constant("SITE_URL") ?>/images/ico_epingle.png" alt="Catégorie voyage"class="ico_categorie" />Bienvenue a vous !
	</h4>
	<p>Ce site est une ébauche de CMS réalisé en MVC bla bla....</p>
	<!--p>Avec la mise en place ou création d'un nouveau design pattern Le A.Gf.M.V.C.</p>
	<p>Crée sur une base MVC + A pour Arborecense allège l'index et simplifie l'implentation de divers module une foi crée,
	Gf pour Général_fonction qui permet de gérer des fonctions diversse & utile à tous le site ceux qui permet l'addition de module de la plus simple des façons possible, </p>
	<p>Contenant en plus un DAO pour un simplification des requete et accés au base de donnée</p>
	<p>La totalité des liens de gestion des modules divers du panel admin, ont deja etais crée en mode procedural et à adapté au design pattern du site, il y a du boulot !!!</p-->
	<h4><b>@Mickael</b>, désolé, mais par manque de temps du à une gelère pour l'import xml et la table de jointure.<br />- j'ai utilisé du code javascript et jquery pour le tri par colonne et la pagination.<br />
	ce petit site est loin d'etre operationnel ne serai-ce que pour le blocage à toutes personne enregistrer ou non d'accedé au panel admin.(je dois rentrer chaque page à bloqué dans la page config.php et à l'heure actuelle j'ai vraiment fait le minimum pour verifier que cela fonctionne bien.)<br /><br />
	- La db contiens toutes les tables sans les données du xml tu la trouvera a la racine du site il n'y a que dans membres qu'il y a des utilisateurs je t'es crée un pass admin :<br /><br />
	<blockquote>
	<p><u>Login admin :</u> dwaps <br /></p>
	<p><u>pass admin :</u> 123456 <br /></p>
	<br />
	- L'import xml est fonctionnelle mais a faire en dehors du site n'etant pas integré au site : prendre le dossier "xmlImport" a la racine du site et le coller dans le dossier "www" de wamp ou "htdocs" de xampp puis lancer l'index le reste coulle de source ;), le xml modifier est dans le dossier xmlImport, ainsi que la page import3.php configurer pour aller sur la db "membre" en localhost/root/sans mot de passe<br />
	<u>Information</u> j'ai changer les valeurs "true" et "false" du fichier XML en "1" et "2" pour l'adapter à l'afichage dans le site.</blockquote>
	<br />- Si tu a un probleme d'installation du site regarde le fichier "global.php" a la racine du site il ce peu en fonction des version de ton serveur qu'il faille le modifier suite a un probleme de virtual host<br /><br />
	
	Architecture du site:
<blockquote>
	- index.php : reparti les taches<br />
	- global.php : configure la racine du site <br />
	- config.php : gere les session du site<br />
	- src/arbo/code_ctrl.php : liste tous les controlleur du site<br />
	- src/arbo/back ou front : gere les url et les appel des focntion dans les controller<br />
	- src/controleur : contient tous les controleur du site<br />
	- src/vue : contient toutes les vue classer dans des dossier separer(les fichiers a la racine sont pour la mise en page du site)<br />
	- src/general_fonction : contient des pages géneraliste utile dans tous le site et offre des petit plus au design et autre pour le site <br />ex: l'import xml pourais ce faire de ce dossier une foi implemente dans le site.<br />
	- src/model/dao : contient tous les dao du site ainsi que la page de connexion<br />
	- src/model/objet : contien tous les objet du site<br /><br />
	En esperent qu'il convienne pour validé les ecf et qu'il y a sufisament de couches et de requete meme si il y a peu de jointure.<br />si tu a des question n'hesite pas.
	
	</h4>
</article>