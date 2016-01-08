<!DOCTYPE html>
<html>
<head>
	<title>Class Design: Constructor</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1>Class Design: Constructors</h1>
   <p>A constructor is a special function within a class definition, that is automatically invoked as soon as an object is instatiated. It provides a chance for the class designer to ensure properties are appropriately initialized.</p> 
   <p>PHP is unlike some other OOP languages, in that the constructor function does not share the name of the class, but is given the function name <strong><a href="http://php.net/manual/en/language.oop5.decon.php">__construct( )</a></strong> NOTE the double underscore preface.</p>
   <p>Officially,the constructor is one of many so-called 'magic functions' in PHP. Magic functions are reserved function names and have special behaviors, such as never being explicitly invoked by the developer (PHP invokes them automatically). All magic function names are prefaced with two underscores.</p> 
<pre><code>
class MyClass{
	public function __construct(){
		//this function is invoked automaticcalky
		//during Object instantiation
	}
}
</code></pre>
<span>
    <?php
	/*
	load the Bird.php file
	examine the source code and locate the constructor
	determine if parameters will be required at instantiation
	*/
	require_once("SSDStudent.php");
    /*
	pass parameter arguments to the constructor at instantiation
	*/
    $whiskeyJack = new SSDStudent("Blue","Tweet!", "ouch");
    $hawk = new SSDStudent("Black","Screech!", "Bite");
    $whiskeyJack->work();
	
	function __autoload($classname){
   	require_once(  "./" . $classname . ".php"   );
}
		$myBird = new SSDStudent("Yellow", "Tweet");
		$myBird->work();
		echo "<h3>Serializing an Object into a string...</h3>";
		$serializedString = serialize($myBird);
		echo "<h3>Display the serialized string...</h3>";
		echo "<p>".$serializedString."</p>";
	
	
	?>
</span>
</body>
</html>