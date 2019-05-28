
<?php
 class tillQueue
 {
	// tillQueue is a list of persons
	private $tillQueue; 
	
		/**
     	 * Constructor
     	 */
	function __constructor()
	{
	 $tillQueue = array();	
	}
	
		/**
     	 * Person joins the back of the queue
     	 * @param person
     	 */
	public function joinsBackOfQueue($person)
	{
	 	$this->tillQueue[] = $person;
	}

		/**
    	 * If there is a queue, remove the first Person from
     	 * the queue and return. 
     	 * If there is no one in the queue, this returns null.
     	 * @return First person in queue or null
     	 */
	public function firstPersonInQueue()
	{
	 	return array_shift($this->tillQueue); 
	}
	
		/**
     	 * Method checks whether there are persons in the queue. 
     	 * @return Whether or not a queue exists
     	 */
	public function thereIsAQueue()
	{
	 	return sizeof($this->tillQueue)>0;
	}
 }
?>
