<?php

	/**
	 * @author Cyril-OLLIER
	 *
	 */

	class Membre
		{
			private $result = null;
		/**
		 * declaration variable 
		 */
			private $id;
			private $pseudo;
			private $pass;
			private $email;
			private $type_droit;			
			private $date_naissance;
			private $date_enregistrement;
			
			/**
			 * getters and setters
			 */
			public function getId() {
				return $this->id;
			}
			
			public function setId($id) {
				$this->id = $id;
			}
			
			public function getPseudo() {
				return $this->pseudo;
			}
			
			public function setPseudo($pseudo) {
				$this->pseudo = $pseudo;
			}
			
			public function getPass() {
				return $this->pass;
			}
				
			public function setPass($pass) {
				$this->pass = $pass;
			}
			
			public function getEmail() {
				return $this->email;
			}
			
			public function setEmail($email) {
				$this->email = $email;
			}
			
			public function getType_droit() {

				return $this->type_droit;
			}
			
			public function getType_droitString() {
				$resultat = "";
				switch($this->type_droit) {
					case 0: {
						$resultat = "Admin";
					} break;
					
					case 1: {
						$resultat = "Utilisateur";
					} break;
					
					case 2: {
						$resultat = "Moderateur";
					} break;
					
					default: {
						$resultat = "Utilisateur";
					} break;
				}
				
				return $resultat;
			}
				
			public function setType_droit($type_droit) {
				$this->type_droit = $type_droit;
			}
			
			public function getDate_naissance() {
				return $this->date_naissance;
			}
			
			public function setDate_naissance($date_naissance) {
				$this->date_naissance = $date_naissance;
			}
			
			public function getDate_enregistrement() {
				return $this->date_enregistrement;
			}
				
			public function setDate_enregistrement($date_enregistrement) {
				$this->date_enregistrement = $date_enregistrement;
			}
			
		}