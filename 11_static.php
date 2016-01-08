<!DOCTYPE html>
<html>
<head>
	<title>The Static Keyword</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1>The Static Keyword</h1>
	<p>While each object made from the same class will share the same properties and functions, they often have unique values assigned to their properties (their state is different). The <a href="http://www.php.net/manual/en/language.oop5.static.php">static</a> keyword can be used to create shared properties or functions. A property that is <strong>static</strong> is <strong>shared by all members of the class</strong>.</p>
	<p>Static variables and functions are available for use without requiring an instantiated object. Because of this, a static function may not reference any non-static values.</p>
	<p>Accessing static functions or variables requires useage of the scope resolution double colon ::
    <ul>
    	<li>Reference from inside the class code - <code>self::$staticValue</code> </li>
        <li>Reference from outside the class -  <code>ClassName::$staticValue</code></li>
    </ul>
	
	</p>
	<p>NOTE: a static variable is shared by all similar Objects, but its value MAY CHANGE</p>
	<p>NOTE: a CONSTANT is shared by all similar Objects, but its value MAY NOT CHANGE</p>	
<pre><code>
class MyClass{
	
	//declare some static variables
	private static $numberOfObjects;
	public static $someStaticVariable = "Hello world!";

	public function __construct(){
		self::$numberOfObjects++; //access static inside class
	}
	public function printNumberOfObjects(){
		echo self::$numberOfObjects;	 //access static inside class
	}

}

$obj01 = new MyClass();
$obj02 = new MyClass();
$obj01->printNUmberOfObjects();
echo MyClass::$someStaticVariable; //access a public static from outside the class
</code></pre>
<span>
    <?php
    class Bird{

    	private static $numBirds = 0;
    	private $name = "";
    	
    	public static function doSomething(){
			echo "Static function activated (no Object required)<br />";    
    	}	
    	
    	public function __construct(){
			echo "<p>A new Bird has been instantiated!</p>";
			self::$numBirds++;
			echo "<p>Using a static variable, shared by all Bird Objects... Num birds: ". self::$numBirds . "</p>";
    	}
    	public function __destruct(){
    		self::$numBirds--;
	   	}
    }
    //access a static function from outside class
    //echo Bird::$numBirds;
   	Bird::doSomething();
    
    
    $bird01 = new Bird();
    $bird02 = new Bird();
    unset($bird01);
    $bird03 = new Bird();
    ?>
</span>
</body>
</html>