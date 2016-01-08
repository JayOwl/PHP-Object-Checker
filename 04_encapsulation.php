<!DOCTYPE html>
<html>
<head>
	<title>Class Design: Encapsulation</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1>Class Design: Encapsulation</h1>

    <p>Once you have instantiated an object, you have access to the class code that is designated 'visible'. The visibility of a property or method can be defined by prefixing the declaration with the keywords public, protected or private.</p>
    <p>Private or protected code encourages <strong>encapsulation</strong>, which usually means that only a class's public methods can manipulate its methods and properties. This is considered a safe programming technique.</p>
	<ul>
		<li><code>public</code> visible to all </li>
		<li><code>protected</code> can be accessed within the class and by inherited and parent classes</li>
		<li><code>private</code> can only be accessed within the class</li>
	</ul>
<pre><code>
/*
unlike other OOP languages, you cannot assign 
visibility to the class itself. all classes are publicly visible
---------------------------------------------------------------
*/
class MyClass{
	/*
	usually class properties are declared 'private' or 'protected'
	to ensure the data is kept safe from mismanagment
	----------------------------------------------------------------
	*/
	private		$private		= 'Private';

	/*
	public 'getter' and 'setter' functions are usaed to allow
	accessing or altering the value of class properties
	----------------------------------------------------------------
	*/
	public function getPrivate(){  
		return $this->private;
	}
	public function setPrivate($newValue){  
		$this->private = $newValue;
	}

}
</code></pre>
<span>
<?php
class Bird{
	/*
	-------------------------------------------------------------------
	PROPERTIES (variables and constants) 
	usually private, since we want to keep them from being abused
	*/
	private $song = "La la la!";
	public   $birdType = "Budgie";

	/*
	-------------------------------------------------------------------
	BEHAVIOURS (functions)
	*/
	/*
	for each private property,
	there is often a public Accessor and Mutator
	providing a mechanism for Objects to manage them
	*/
	//accessor (usually returns the value)
	public function getSong(){
		return $this->song;	
	}

	//mutator (usually takes a parameter(s) and )
	public function setSong($newSong){
		if( !is_string($newSong) ){
			echo "<p>'".$newSong."' is not a reasonable song. Song has not been changed</p>";
		}
		$this->song = $newSong;	
	}
}

echo "<h3>Instantiate a new Object</h3>";
$aBird = new Bird();
echo "<h3>Run public functions</h3>";
echo "<p>Run accessor getSsong(): " . $aBird->getSong() . "</p>";
echo "<p>Run mutator setSong() to change the song...</p>";
$aBird->setSong("Tweet tweet!") ;
echo "<p>Run accessor getSong(): " . $aBird->getSong() . "</p>";
echo "<h3>Try to setSong() to something unreasonable (eg: a number)...</h3>";
$aBird->setSong(42) ;

echo "<h3>If a property is public, it can potentially be abused...</h3>";
echo "<p>Public \$birdType is currently: ".$aBird->birdType."</p>";
echo "<p>Re-assigning the value of \$birdType</p>";
$aBird->birdType = "Cheeseburger";
echo "<p>Public \$birdType is currently: ".$aBird->birdType."</p>";

?>
</span>
</body>
</html>