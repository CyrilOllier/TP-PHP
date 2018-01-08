<?php

	/**
	 * @author Cyril-OLLIER
	 *
	 */

	class Book
		{
			private $result = null;
		/**
		 * declaration variable 
		 */
			private $id;
			private $title;
			private $availability;
			private $price;
			private $overview;
			private $publisher;
			private $publication_date;
			
			
			/**
			 * getters and setters
			 */
			public function getId() {
				return $this->id;
			}
			
			public function setId($id) {
				$this->id = $id;
			}
			
			public function getPublisher() {
				return $this->publisher;
			}
			
			public function setPublisher($publisher) {
				$this->publisher = $publisher;
			}
			
			public function getPublication_date() {
				return $this->publication_date;
			}
			
			public function setPublication_date($publication_date) {
				$this->publication_date = $publication_date;
			}
			
			public function getTitle() {
				return $this->title ;
			}
			
			public function setTitle($title) {
				$this->title = $title;
			}
			
			public function getAvailability() {
				return $this->availability;				
			}
				
			public function setAvailability($availability) {
				$this->availability = $availability;					
			}
			
			public function getPrice() {
				return $this->price;
			}
			
			public function setPrice($price) {
				$this->price = $price;
			}
			
			public function getOverview() {
				return $this->overview;
			}
			
			public function setOverview($overview) {
				$this->overview = $overview;
			}
			
		}