<?php

/***********************************
 *     Liste tous les Controleur du site      *
 ***********************************/
// Membre // 
require_once constant("SITE_PATH") . "/src/controleur/MembreController.php";
// Fin Membre //

// Other //
require_once constant("SITE_PATH") . "/src/controleur/OtherController.php";
// Fin Other //

// Librairie //
require_once constant("SITE_PATH") . "/src/controleur/BookController.php";
require_once constant("SITE_PATH") . "/src/controleur/AuthorController.php";
require_once constant("SITE_PATH") . "/src/controleur/AuthorBookController.php";
// Fin Librairie //

