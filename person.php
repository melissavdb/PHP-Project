<?php

	class Person {
		private $csn;
		private $firstName;
		private $surname;
		private $dayOfBirth;
		private $monthOfBirth;
		private $yearOfBirth;
		private $gender;
		private $tray;

		public function __construct($csn1, $firstname1, $surname1, $dayofbirth1, $monthofbirth1, $yearofbirth1, $gender1){
			$this->setCsn($csn1);
			$this->setFirstName($firstname1);
			$this->setSurname($surname1);
			$this->setDateOfBirth($dayofbirth1, $monthofbirth1, $yearofbirth1);
			$this->setGender($gender1);
		}

		public function grabTray($tray)
		{
			$this->tray = $tray;
		}
		

		function setCsn($new_csn) {
			$this->csn = $new_csn;
		}

		function setFirstName($new_firstName) {
			$this->firstName = $new_firstName;
		}

		function setSurname($new_surname) {
			$this->surname = $new_surname;
		}

		function setDateOfBirth($day, $month, $year) {
			if ($day < 1 or $month < 1 or $month > 12 or $year < 1900 or $year > 2100 or checkdate($month, $day, $year) == false) 
			{
				$this->dayOfBirth = 0;
				$this->monthOfBirth = 0;
				$this->yearOfBirth = 0;
			}
			else 
			{
				$this->dayOfBirth = $day;
				$this->monthOfBirth = $month;
				$this->yearOfBirth = $year;
			}
		}

		function setGender($new_gender) {
			if ($new_gender == "male" || $new_gender == "female"){
				$this->gender = $new_gender;
			}
			else {
				$this->gender = "Unknown";
			}
		}
		
		/**
		 * Getter for dateOfBirth. Provides dateOfBirth in DD-MM-YYYY format
 		* and ‘Unknown’ if dateOfBirth is unknown.
 		* @return dateOfBirth
 		*/
 		public function getDateOfBirth()
		{
			if ($this->dayOfBirth   	== 0 && 	
    			$this->monthOfBirth 	== 0 && 
    			$this->yearOfBirth	== 0) 
		{
	 
 		$temp = "Unknown";
	
		} else {

	 	$temp  = $this->dayOfBirth   . "-";
	 	$temp .= $this->monthOfBirth . "-";
 	 	$temp .= $this->yearOfBirth;	

		}
	
		return $temp;
 		}

		public function getFullName (){
			$output1 = $this->firstName;
			$output2 = $this->surname;
			$finalOutput = $output1 . " " . $output2;
			return $finalOutput;
		}
		public function getCSN (){
			$output = $this->csn;
			return $output;
		}
		public function getGender (){
			$output = $this->gender;
			return $output;
		}

		function print(){
			echo $this->getDateOfBirth() . "\n";
			echo $this->getFullName() . "\n";
			echo $this->getCSN() . "\n";
			echo $this->getGender() . "\n" . "\n";;
		}

		/**
 		* Method for grabbing article and placing it on the tray
 		* @param article
 		*/
 		public function grabArticle($article)
 		{
 		$this->tray ? $this->tray->add($article) : print( "No tray!");      
 		}

 		/**
 		* Method to count the number of articles on the tray 
 		* belonging to the person.
		 * @return The number of articles
 		*/
 		public function getNumberOfArticles()
 		{		
			$numberofarticles = $this->tray->getNumberOfArticles();
			return $numberofarticles;
 		}
 
 		/**
 		* Method of calculating total price of articles 
 		* on the tray belonging to the person concerned
		 * @return The total price
 		*/
 		public function getTotalPrice()
 		{
			$totalprice = $this->tray->getTotalPrice();
			return $totalprice;
		}


	}


//not a leap year
$testObject = new Person("nl041293012939", "Pieter" , "Klaasen", "29", "02", "1997" , "male");
$testObject->print();

//leap year
$testObject = new Person("nl041235345012939", "Petra" , "Bolly", "29", "02", "1996" , "male");
$testObject->print();

?>
