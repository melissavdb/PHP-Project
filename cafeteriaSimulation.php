<?php
class CafeteriaSimulation{
 private $cafeteria;
	private $till;

/**
 * Constructor
 */
 public function __construct(){
  $this->cafeteria = new Cafeteria();	
 }
 
/**
 * This method simulates a number of days in the 
 *  operation of the cafeteria
 * @param days
 */
 public function simulate($days){
  for($i=0; $i<$days; $i++){
    // for now, let 10+i persons in per day,
    // will be changed next week...
    // for loop for persons
	for($j=0; $j< 10 + $i; $j++){
	  $this->cafeteria->enterGrabJoinQueue();
 	}
	// process queue for the till
	$this->cafeteria->ProcessQueueForTill();
	  
	public string getAmountOfMoneyInTill(){
	 return $amountofmoneyintill
 } 

 public string getNumberOfArticles(){
	 return $numberofarticles
 }
 
 public string getResetTill(){
	 return $resettill
 }
	 
	// show daily totals (articles and cash in till)
	echo "\n";
	echo "Day: " .$i . "\n";
	echo "\t Number of Articles: " . $this->cafeteria->numberOfArticles();
	echo "\n";
	echo "\t Amount of Money: " . $this->cafeteria->amountOfMoneyInTill();
	 
	 // reset the till for the next day
	$this->cafeteria->resetTill();
  }
  echo "\n";
 }
} 
?>
