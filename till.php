<?php
class Till{
 private $tillQueue;
 private $numberOfArticles;
 private $moneyInTill;

/**
 * Constructor
 */
 function __construct($tillQueue){
  $this->tillQueue        	= $tillQueue;
  $this->numberOfArticles 	= 0;
  $this->moneyInTill     	= 0;
 }

/**
 * query the number of articles and the total price.
 * The implementation will be replaced later 
 * by a real payment by the person. 
 * @param person who has to pay
 */
 public function pay($person){
  $this->numberOfArticles 	+= $person->getNumberOfArticles();
  $this->moneyInTill     	+= $person->getTotalPrice();
 }

/**
 * Returns the number of articles that 
 * have passed the till 
 * from the moment the resetValues method 
 * is called.
 * @return number of articles
 */
 public function numberOfArticles()
 {
  return $this->numberOfArticles;
 }

/**
 * Gives the total amount of all articles that
 * have passed the till, from the moment the
 * resetTill method 
 * is called.
 * @return amount of money in till
 */
 public function amountOfMoneyInTill()
 {
  return $this->moneyInTill;
 }

/**
 * reset the values of the number of articles that have passed by and 
 * the total amount of money in the till.
 */
 public function resetTill()
 {
  $this->numberOfArticles 	= 0;
  $this->moneyInTill     	= 0;
 }
}
?>
