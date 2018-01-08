<?php

	/**
	 * @author Cyril-OLLIER
	 *
	 */

	class Author
		{
			private $result = null;
		/**
		 * declaration variable 
		 */
			private $id;
			private $firstname;
			private $lastname;
			private $native_country;
			private $birth_year;
			
			/**
			 * getters and setters
			 */
			public function getId() {
				return $this->id;
			}
			
			public function setId($id) {
				$this->id = $id;
			}
			
			public function getFirstname() {
				return $this->firstname;
			}
			
			public function setFirstname($firstname) {
				$this->firstname = $firstname;
			}
			
			public function getLastname() {
				return $this->lastname;
			}
				
			public function setLastname($lastname) {
				$this->lastname = $lastname;
			}
			
			public function getNative_country() {
				return $this->native_country;
			}
			
			public function setNative_country($native_country) {
				$this->native_country = $native_country;
			}
			
			public function getBirth_year() {
				return $this->birth_year;
			}
			
			public function setBirth_year($birth_year) {
				$this->birth_year = $birth_year;
			}
					
			
		}