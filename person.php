<?php

	class Person {
		private $csn;
		private $firstName;
		private $surname;
		private $dayOfBirth;
		private $monthOfBirth;
		private $yearOfBirth;
		private $gender;

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
			if ($day <= 0) {
				$dayOfBirth = 0;
				$monthOfBirth = 0;
				$yearOfBirth = 0;
			}
			elseif ($month < 1 or $month > 12) {
				$dayOfBirth = 0;
				$monthOfBirth = 0;
				$yearOfBirth = 0;
			}
			elseif ($year < 1900 or $year > 2100) {
				$dayOfBirth = 0;
				$monthOfBirth = 0;
				$yearOfBirth = 0;
			}
			else {
				if (checkdate($month, $day, $year)) {
					$dayOfBirth = $day;
					$monthOfBirth = $month;
					$yearOfBirth = $year;
				}
				else {
					$dayOfBirth = 0;
					$monthOfBirth = 0;
					$yearOfBirth = 0;
				}
			}

		}

		function setGender($new_gender) {
			$this->gender = $new_gender;
		}
	}

?>