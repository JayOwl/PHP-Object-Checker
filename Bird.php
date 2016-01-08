<?php
class Bird{
	/*
	 * (properties)
	* usually private
	* -----------------------------
	* */
	private $eyeColor;
	private $song;

	public function __construct($eyeColor, $song){
		echo "<p>Creating a Bird Object</p>";
		$this->eyeColor = $eyeColor;
		$this->setSong($song);
	}

	public function __destruct(){
		echo "<p>A Bird Object has been destroyed!!!!</p>";
	}
	 
	/*
	 * getters (accessors)
	* usually public
	* -------------------------------
	* */
	public function getEyeColor(){
		return $this->eyeColor;
	}
	public function getSong(){
		return $this->song;
	}
	/*
	 * setters (mutators)
	* usually public
	* -------------------------------
	* */
	public function setSong($song){
		if( is_string($song) ){
			$this->song = $song;
		}
	}
	private function fly(){
		return "Flap flap";
	}
	public function sing(){
		return $this->song;
	}
	public function demonstrateBirdness(){
		echo "<ul>";
		echo "<li>This bird is in action...</li>";
		echo "<li>Eyes: " . $this->eyeColor . "</li>";
		echo "<li>Fly: " . $this->fly() . "</li>";
		echo "<li>Sing: " . $this->sing() . "</li>";
		echo "</ul>";
	}
}
?>