<?php

/**
 * The following method is to avoid 
 * include_once constructions being written each time. Now, if a 
 * class is not included, a php file
 * with a lower-case name is searched for.
 */ 

 function __autoload($class_name) {
    include_once strtolower($class_name) . '.php';
 }

 $peanutButter 	= new Article('Calve Peanut butter'	, 3.21);
 $soup      		= new Article('Vegetable soup'    	, 2.11);
 $testObject = new Person("nl041239779939", "Nils" , "Visser", "02", "10", "1997" , "male");
 $tray = new Tray;
 $testObject->print();
 $testObject->grabTray($tray);
 $testObject->grabArticle($peanutButter);
 $testObject->grabArticle($peanutButter);
 echo $testObject->getTotalPrice();
 echo "\n \n";
 echo $testObject->getNumberOfArticles();
 echo "\n \n";

 $peanutButter->print();
 echo "\n-------------------------------------\n";
 $soup->print();
 echo "\n-------------------------------------\n";



?>