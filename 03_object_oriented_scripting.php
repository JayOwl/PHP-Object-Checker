<!DOCTYPE html>
<html>
<head>
	<title>Object Oriented PHP</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1>Object Oriented PHP</h1>
    <?php
	?>
    <p>Functions are reusable blocks of code and represent a huge increase in programming power. Object Oriented Programming (OOP) takes the use of functions to a whole new level. Objects are like advanced variables. A basic variable can contain only one piece of data at a time, an array can hold several pieces of data at one time, and an Object can contain not only several pieces of data, but also entire functions.</p>
    <h2>Advantages of OOP</h2>
    <ul>
	    <li>A powerful, flexible programming technique</li>
        <li>Creates reusable code</li>
        <li>Supports Inheritance</li>
        <li>Encourages Encapsulation</li>
        <li>More effectively utilize code created by others</li>
    </ul>
    <p>OOP involves two major concepts:</p>
    <ol>
    <li>Classes</li>
    <li>Objects</li>
    </ol>
    <h2>Classes</h2>
    <p>A class is a collection of code, including variables and functions. The code for a class represents a blueprint for how to build something. Eg: the blueprint for a house describes how to construct a house. You cannot live inside a blueprint, but you can use it to create actual houses...</p>
	<p>A class typically is organized into two sections of code:</p>
	<ol>
		<li>
		<h4>Properties</h4>
		<p>Variables for describing the state of things (eg: username)</p>
		</li>
		<li>
		<h4>Behaviors</h4>
		<p>Functions for performing the actions required (eg: connect to a database)</p>
		</li>
	</ol>
	<p>Class names begin with a Capital letter, and are camel cased.</p>

    <h2>Objects</h2>    
    <p>Objects are considered instances of a class. If you follow the blueprints for a house, you can build an actual house. If the blueprint is especially effective, you may choose to build several actual houses from the same blueprint. With OOP you may create one or more Objects (instances) from a Class (blueprint).</p> 
	<p>Using an object involves using the class to create an instance of it, then acessing/changing the values of its properties, and running the functions it offers.</p>

    <h2>OOP Basics</h2>
    <p>Object Oriented Programming typically involves two steps. First, the code that defines a class is written. Second, one or more objects are instantiated from the class. Once instantiated, objects may be 'used'.</p>
	
<pre><code>//step 1: define the class
class MyClass{  
	//class code goes here   
}

//step 2: instantiate an object from the class
$myObject = new MyClass();
</code></pre>	
    <h4>OOP Basics: Instantiation (Creating an Object)</h4>
	<p>An object is created using the class definition, usually defined in an external file. After loading the class definition, new Objects can be created using the <code>new</code> keyword.</p>
<pre><code>//load the class definition
require_once("MyClass.php");
//instantiate an object from the class
//store the object in a PHP variable
$myObject = new MyClass();
</code></pre>	
    <h4>OOP Basics: Using an Object</h4>
	<p>After an object is instantiated, you have access to any of its public behaviors or properties using the <code>-></code> operator.</p>
<pre><code>//instantiate an object from the class
$myObject = new MyClass();
//run the doSomething() function
// using the -> operator
$myObject->doSomething();
</code></pre>	
<span>
<?php
//define a class
class Bird{
	function fly(){
		echo "<p>Flap flap!</p>";
	}
}
//instantiate an object
echo "<h3>Instantiate a new Object</h3>";
$aBird = new Bird();

//run an object's public function
echo "<h3>Run a function</h3>";
$aBird->fly();
?>
</span>
</body>
</html>