<!DOCTYPE html>
<html>
<head>
	<title>Constants</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1>Constants</h1>

    <p>To reference a <a href="http://www.php.net/manual/en/language.oop5.constants.php">constant</a>, you must be aware of where you are referencing it from. For example, if in a <strong>Math</strong> class you declare: <strong>const PI = 3.14;</strong> , then to:</p>
    <ul>
    	<li>Reference from inside the class code - <code>self::PI</code> </li>
        <li>Reference from outside the class -  <code>Math::PI</code></li>
    </ul>
    <p>A constant belongs to the class, not the objects made from the class. Thus a single constant is shared among all objects.</p>
    <p>Note the use of the double colon :: known as the scope resolution. This technique must be used whenever accessing constants or static properties.</p>
<pre><code>
class MyClass{
	
	const PI = 3.14; //define a constant

	public function printPi(){
		echo self::PI;	 //access constant inside class
	}
}

echo MyClass::PI; //access a constant outside a class (note you do not need an object to do this)
</code></pre>
<span>
    <?php
class Bird{
	/*
	 * 	define a CONSTANT
	 * */
	const STUDY = "Ornithology";

	public function __construct(){
		//access from inside the class
		//must use 
		//   self::
		//similar to $this, but
		//refers to the class, not the opbject
		echo "<p>Constructor...</p>";
		echo self::STUDY;
	}	
}

//access from outside the class
//no Object is needed
echo "<h3>Access the value of a Class constant. We do not need to instantiate an Object to do this...</h3>";
echo Bird::STUDY;


	?>
	</span>
</body>
</html>