<?php

	/**
	 * @author Cyril-OLLIER
	 *
	 */

	class AuthorBook
		{
			private $result = null;
		/**
		 * declaration variable 
		 */
			private $author_id;
			private $book_id;
			
			
			
			/**
			 * getters and setters
			 */
			public function getAuthor_id() {
				return $this->author_id;
			}
			
			public function setAuthor_id($author_id) {
				$this->author_id = $author_id;
			}
			
			public function getBook_id() {
				return $this->book_id;
			}
			
			public function setBook_id($book_id) {
				$this->book_id = $book_id;
			}
			
			
					
			
		}