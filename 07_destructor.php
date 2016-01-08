<!DOCTYPE html>
<html>
<head>
	<title>Class Design: Destructor</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1>Class Design: Destructor</h1>

   <p>Similar to the constructor, a destructor <a href="http://php.net/manual/en/language.oop5.decon.php">__destruct()</a>is another 'magic' function within a class definition. It is automatically invoked as soon as an object is destroyed or when the script has terminated. It provides a chance for the class designer to execute code before an object has 'died'.</p> 	
<pre><code>
class MyClass{
	public function __destruct(){
		//this function is invoked automaticcalky
		//as soon as the Object is either
		// unset() or when the script terminates
	}
}
</code></pre>
<span>
    <?php
	require_once("Bird.php");  
   echo "<h3>Instantiate a couple of Birds...</h3>";
	//instantiate a couple of Birds
    $whiskeyJack = new Bird("Blue","Caw caw!");
    $eagle = new Bird("Black","Screech!");
	//try out one of the functins
    $whiskeyJack->demonstrateBirdness();
   
   /*  
   note how when you unset() an Object, the destructor will be invoked
   */
   echo "<h3>Now we will explicitly unset (destroy) the first Bird</h3>";
   unset( $whiskeyJack );//destroy the whiskeyJack Object

	/*
	note how if we do not unset the Objects, they will be unset for us once the script has finished running
	*/
	//no unsetting required for the eagle Object, it will be unset for us
	?>
</span>
	<h3>If we dont unset an Object it will be unset for us when the PHP page finishes processing</h3>

</body>
</html>