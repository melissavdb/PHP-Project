<?php
class Cafeteria{
 private $till;
 private $tillQueue;

 /**
  * Constructor
  */
 function __construct(){
  $this->tillQueue = new tillQueue();
  $this->till    = new till($this->tillQueue);
 } 

 /**
  * In this method, a Person and Tray
  * are created and linked
  * to each other. Create two Articles and place 
  * them on the tray.   
  * Finally, the person joins the 
  * till queue.
  */
 public function enterGrabJoinQueue(){
  // create number of articles	
  $peanutButter 	= new Article('Calve peanut butter' , 3.21);
  $soup 		= new Article('Vegetable soup' 	, 2.11);
  $cola 		= new Article('Coca Cola'		, 1.00);
 
  $lecturer  		= new Person('ABA21212', 'Ronald', 'van Dijk', '29', '02','1996', 'M');
	 	 
  //the person grabs an empty tray,
  $lecturer->grabTray(new Tray());
  
  //places articles
  $lecturer->add($soup);
  $lecturer->add($peanutButter);
  $lecturer->add($cola);
  
  // and then joins the queue 
  $this->tillQue->joinsBackOfQueue($lecturer);
 }
 
 /**
  * This method handles the queue at the till.
  */
 public function processQueueForTill(){
 // as long as there is a queue, people have to pay
  while($this->tillQueue->thereIsAQueue()){
   $this->till->pay($this->tillQueue->firstPersonInQueue());	
  }
 }
 
 /**
  * This method counts the money in the till
  * @return amount of money in till
  */
 public string getAmountOfMoneyInTill(){
	 return $amountofmoneyintill
 } 
/**
  * This method returns the number of articles that have passed by.
  * @return the number of articles that have passed by
  */
 public string getNumberOfArticles(){
	 return $numberofarticles
 }
 
 /**
  * This method resets the monitored count of 
  * the number of articles
  * and 'empties' the contents of the till.
  */
 public string getResetTill(){
	 return $resettill
 }
}
?>
