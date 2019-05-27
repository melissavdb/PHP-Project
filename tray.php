<?php
 class Tray
 {
 	//articles is an associative array
private $articles;

    	/**
     	 * Constructor
    	 */
	 function __construct()
	 {
	  $this->articles = array();
	 }
	
    	/**
     	 * Method for adding article to tray
     	 * @param article
     	 */
	 public function add($article)
	 {
	  $this->articles[]= $article;
	 }
	
    	/**
     	 * getter to give instance variable Articles
     	 */
	 public function getArticles()
	 {
	  return $this->articles;
	 }

   	/**
     	 * Method to count number of items on tray
     	 * @return The number of articles 
     	 */
	 public function getNumberOfArticles()
	 {
	  return sizeof($this->articles);
	 }

    	/**
     	 * Method of calculating total price of articles 
     	 * on the tray
     	 * @return The total price
     	 */
	 public function getTotalPrice()
	 {
	  $totalPrice = 0;

	  foreach($this->articles as $article)
	  {
		$totalPrice += $article->getPrice();
     	  }

	  return $totalPrice;
	
	 }
 }
?>
