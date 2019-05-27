<?php

	class Article {
		private $Name;
		private $Price;

		function __construct($name, $price) {
			$this->Name = $name;
			$this->Price = $price;
		}

		function setName($new_name) {
			$this->Name = $new_name;
		}

		function getName() {
			return $this->Name;
		}

		function setPrice($new_price) {
			$this->Price = $new_price;
		}

		function getPrice() {
			return $this->Price;
		}

		/**
 		* Sends the name and price of the article to the screen.
 		*/
 		public function print(){
  			echo "Article: \t" . $this->getName();
  			echo "\n";
  			echo "Price: \t\t" . $this->getPrice(); 
 		}

	}

?>