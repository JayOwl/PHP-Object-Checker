<?php
class SSDStudent{
	/*
	 * (properties)
	* usually private
	* -----------------------------
	* */
	private $studentNumber;
	private $fName;
	private $lName;

	public function __construct($studentNumber, $fName, $lName){
		echo "<p>Creating a Student Object</p>";
		$this->studentNumber = $studentNumber;
		$this->setfName($fName);
		$this->setfName($lName);
	}
	


	/*
	public function __destruct(){
		echo "<p>A Bird Object has been destroyed!!!!</p>";
	}
	 
	
	 * getters (accessors)
	* usually public
	* -------------------------------
	* */
	public function getStudentNumber(){
		return $this->studentNumber;
	}
	public function getFName(){
		return $this->fName;
	}
	public function getLName(){
		return $this->lName;
	}
	/*
	 * setters (mutators)
	* usually public
	* -------------------------------
	* */
	public function setFName($fName){
		if( is_string($fName) ){
			$this->fName = $fName;
		}
	}
	
	public function setLName($lName){
		if( is_string($lName) ){
			$this->lName = $lName;
		}
	}
	
	private function fly(){
		return "Flap flap";
	}
	public function sing(){
		return $this->fName;
	}
	public function work(){
		echo "<ul>";
		echo "<li>This bird is in action...</li>";
		echo "<li>Eyes: " . $this->studentNumber		. "</li>";
		echo "<li>Fly: " . $this->fly() . "</li>";
		echo "<li>Sing: " . $this->sing() . "</li>";
		echo "</ul>";
	}
}
?>