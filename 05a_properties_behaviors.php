<!DOCTYPE html>
<html>
<head>
	<title>Class Design: Properties, Behaviours</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1>Class Design: Properties, Behaviours</h1>

    <p>A class definition is an attempt to model a 'real world' object, based on its properties and behaviours. EG: To model a retractable pen, the properties might consist of 'weight', 'size', 'quantity of ink', and its behaviours may include 'release ink', 'extend pen nub', 'retract pen nub'.</p>
    <p>In PHP OOP code, properties are analagous to variables, and behaviours analagous to functions.</p>
	<h3>Standard Class Design</h3>
	<p>Class names begin with a Capital letter, and are camel cased.</p>
	<p>Most properties are declared private, to keep them safe from mismanagement. If property values need to be accessed or changed public functions are provided for the purpose: a 'get'ter and a 'set'ter.</p>
<pre><code>
class SampleClassName{
	
	//a private variable
	private $classVariable;

	//a public 'get'ter function
	public function getClassVariableValue(){
		return $this->classVariable;
	}

	//a public 'set'ter function
	public function setClassVariableValue($newValue){
		$this->classVariable = $newValue;
	}
}
</code></pre>
 	<h3>The Current Object: $this-></h3>
   <p>Since many objects may be instantiated from a single class, each object must keep track of its own properites. To ensure this, the code within must use a special prefix when referring to any of its internal properties or functions: <strong>$this-></strong> . The <strong>$this-></strong> prefix refers to 'this' particular object, distinct from other objects of the same class.</p>
	<span>
    <?php
    class Bird{
    	/*
    	 * (properties)
    	 * usually private
		 * default values are being assigned here
    	 * -----------------------------
    	 * */
    	private $eyeColor 	= "Yellow";
    	private $song 		= "Tweet";
    	/*
    	 * behaviors, (functions)
    	 * ----------------------------- 
    	* */
    	/*
    	 * getters (accessors)
    	 * */
    	public function getEyeColor(){
			return $this->eyeColor;			
		}
		public function getSong(){
			return $this->song;			
		}
		/*
		 * setters (mutators)
		 * */
		public function setSong($song){
			if( is_string($song) ){
				$this->song = $song;
			}
		}
		/*
		additional, bird-like abilities... 
		*/
    	private function fly(){
    		echo "<p>Flap flap...</p>";
    	}
    	public function sing(){
    		echo "<p>". $this->song . "</p>";
    	}
    	public function demonstrateBirdness(){
    		  $this->fly();  		
			  $this->sing();
    	}
    }
    /*
     * instantiate the class
    * */
	echo "<p>Create a new Bird Object...</p>";
	$hummingbird = new Bird();
	/*
	try out the various functions
	*/
	echo "<p>Run sing() function...</p>";
    $hummingbird->sing();
	echo "<p>Run and echo getSong() function ...</p>";
    echo $hummingbird->getSong();
	echo "<p>Run setSong() to change the Brid's song...</p>";
    $hummingbird->setSong("Caw caw!");
	echo "<p>Run and echo the song to prove it has been changed...</p>";
    echo $hummingbird->getSong();
	echo "<p>Run demonstrateBirdness()...</p>";
    $hummingbird->demonstrateBirdness();
    
	echo "<p>Create another new Bird Object...</p>";
	$eagle = new Bird();
	$eagle->setSong("Screech!");
	$eagle->demonstrateBirdness();
	?>
	</span>
	<h3>Comparing Objects</h3>
   <p>The <strong>==</strong> comparison operator determines if two objects are different instances of the same class, and whose properties share the same values. The <strong>===</strong> comparison returns true only if the two objects being compared are instances of the same class. Use <a href="http://php.net/manual/en/function.get-class.php">get_class( )</a> to determine what class an object is.</p>	
   <span>
	<?php
	echo "<hr /><p>Compare similar Bird objects with different state...</p>";
	if( $eagle == $hummingbird ){
		echo "<p>The \$eagle is == to \$hummingbird</p>";
	}else{
		echo "<p>The \$eagle is NOT == to \$hummingbird</p>";	
	}
	if( $eagle === $hummingbird ){
		echo "<p>The \$eagle is === to \$hummingbird</p>";
	}else{
		echo "<p>The \$eagle is NOT === to \$hummingbird</p>";	
	}	
	$eagle->setSong("Caw caw!");
	echo "<hr /><p>Compare similar Bird objects with the same state...</p>";		
	if( $eagle == $hummingbird ){
		echo "<p>The \$eagle is == to \$hummingbird</p>";
	}else{
		echo "<p>The \$eagle is NOT == to \$hummingbird</p>";	
	}
	if( $eagle === $hummingbird ){
		echo "<p>The \$eagle is now === to \$hummingbird</p>";
	}else{
		echo "<p>The \$eagle is now NOT === to \$hummingbird</p>";	
	}
	echo "<hr /><p>Use get_class( ) to determine the class of the object</p>";
	if( get_class($eagle) == "Mammal" ){
		echo "<p>The \$eagle is a Mammal</p>";
	}else{
		echo "<p>The \$eagle is NOT a Mammal</p>";
	}
		if( get_class($eagle) == "Bird" ){
		echo "<p>The \$eagle is a Bird</p>";
	}else{
		echo "<p>The \$eagle is NOT a Bird</p>";
	}	
	?>
</span>
</body>
</html>