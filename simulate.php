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
  
 $peanutButter->print();
 echo "\n-------------------------------------\n";
 $soup->print();
 echo "\n-------------------------------------\n";



?>