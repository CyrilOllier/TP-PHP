# TP-PHP
TP PHP Librairie
infos et explication en cas de probleme d'install !

***************
message perso :
***************


@Mickael, désolé, mais par manque de temps du à une gelère pour l'import xml et la table de jointure.
- j'ai utilisé du code javascript et jquery pour le tri par colonne et la pagination.
ce petit site est loin d'etre operationnel ne serai-ce que pour le blocage à toutes personne enregistrer ou non d'accedé au panel admin.
(je dois rentrer chaque page à bloqué dans la page config.php et à l'heure actuelle j'ai vraiment fait le minimum pour verifier que cela fonctionne bien.)

- La db contiens toutes les tables sans les données du xml tu la trouvera a la racine du site il n'y a que dans membres 
qu'il y a des utilisateurs je t'es crée un pass admin :

    Login admin : dwaps

    pass admin : 123456

************************
Information Importante :
************************


    - L'import xml est fonctionnelle mais a faire en dehors du site n'etant pas integré au site : prendre le dossier "xmlImport" a la racine du site 
    et le coller dans le dossier "www" de wamp ou "htdocs" de xampp puis lancer l'index le reste coulle de source ;), le xml modifier est dans le dossier xmlImport,
    ainsi que la page import3.php configurer pour aller sur la db "membre" en localhost/root/sans mot de passe
    Information j'ai changer les valeurs "true" et "false" du fichier XML en "1" et "2" pour l'adapter à l'afichage dans le site.


    - Si tu a un probleme d'installation du site regarde le fichier "global.php" a la racine du site il ce peu en fonction des version de ton serveur qu'il faille 
    le modifier suite a un probleme de virtual host

*********************
Architecture du site:
*********************


    - index.php : reparti les taches
    - global.php : configure la racine du site
    - config.php : gere les session du site
    - src/arbo/code_ctrl.php : liste tous les controlleur du site
    - src/arbo/back ou front : gere les url et les appel des focntion dans les controller
    - src/controleur : contient tous les controleur du site
    - src/vue : contient toutes les vue classer dans des dossier separer(les fichiers a la racine sont pour la mise en page du site)
    - src/general_fonction : contient des pages géneraliste utile dans tous le site et offre des petit plus au design et autre pour le site
    ex: l'import xml pourais ce faire de ce dossier une foi implemente dans le site.
    - src/model/dao : contient tous les dao du site ainsi que la page de connexion
    - src/model/objet : contien tous les objet du site

    En esperent qu'il convienne pour validé les ecf et qu'il y a sufisament de couches et de requete meme si il y a peu de jointure.
    si tu a des question n'hesite pas. 
