<?php

	class Person {
		private $csn;
		private $firstName;
		private $surname;
		private $dayOfBirth;
		private $monthOfBirth;
		private $yearOfBirth;
		private $birthdate;
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
			if (checkdate($month, $day, $year) == true) {
				$this->dayOfBirth = $day;
				$this->monthOfBirth = $month;
				$this->yearOfBirth = $year;
				$this->birthdate = $day . "-" . $month . "-" . $year;
			}
			else {
				echo "please fill in a correct date";
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
		
		public function getDateOfBirth (){
			$output = $this->birthdate;
			return $output;
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
			echo $this->getDateOfBirth() . "<br>";
			echo $this->getFullName() . "<br>";
			echo $this->getCSN() . "<br>";
			echo $this->getGender() . "<br>" . "<br>";;
		}

	}

$testObject = new Person("nl041239779939", "Nils" , "Visser", "02", "10", "1997" , "male");
$testObject->print();

//not a leap year
$testObject = new Person("nl041293012939", "Pieter" , "Klaasen", "29", "02", "1997" , "male");
$testObject->print();

//leap year
$testObject = new Person("nl041235345012939", "Petra" , "Bolly", "29", "02", "1996" , "male");
$testObject->print();

?>
