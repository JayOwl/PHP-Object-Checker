<!DOCTYPE html>
<html>
<head>
	<title>Code Design: Inheritance</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1>Code Design: Inheritance</h1>
	<p>One of the great strengths of OOP is its support of <a href="http://www.php.net/manual/en/language.oop5.inheritance.php">inheritance</a>. If a class is well designed, other classes may 'inherit' the same characteristics (properties and functions). The parent class's public and protected members will be available to the child class. If the child class redefines anything, it overrides the parent. If a child needs to explicitly access something overridden, the <code>parent::</code> scope resolution can be used.</p>
	<p>Use the keyword <code>extends</code> to define a class that inherits from another</p>
	<p>
If an inherited class needs to access functions of a parent class, you can use either	
	</p>
	<ol>
	<li><code>parent::</code> preceding a function or property will make a call to whatever class is described in the 'extends' declaration
	
	<br />eg: <code>parent::getSong()</code> in class Penguin invokes class Bird's getSong function</li>
	<li><code>ClassName::</code> preceding a function or property provides access to any inherited class, <br />
	eg: If Penguin extends Bird which extends Animal, class Penguin can access animal functions directly with <code>Animal::doSomething()</code></li>

<pre><code>
class ParentClass{
	public function __construct(){

	}
	public function doSomething01(){
		echo "ParentClass doSomething01";
	}
	public function doSomething02(){
		echo "ParentClass doSomething02";		
	}
}

class ChildClass extends ParentClass{
	public function __construct(){
		//explicitly call the parent constructor to ensure it is run
		parent::__construct();
	}
	public function doSomething02(){
		echo "ChildClass overrides ParentClass's doSomething02";		
	}	
	public function runParentClassDoSomething02(){
		//access the parent's overridden function
		parent::doSomething02();
	}
}

class GrandChildClass extends ChildClass{
	public function __construct(){
		//explicitly call the parent constructor to ensure it is run
		parent::__construct();
	}
	public function runAncestorClassDoSomething02(){
		//access the top level class function by using the class name
		ParentClass::doSomething02();
	}
}

$child = new ChildClass();
$child->doSomething01();	 //access all public and protected members of the parent class 
$child->doSomething02(); //override parent class members
$child->runParentClassDoSomething02();
</code></pre>	
	
	</ol>
<span>
    <?php
echo "<h3>Instantiate a Penguin that inherits from Bird...</h3>";
require_once("Penguin.php");    
$emperor = new Penguin("Black","Squak");
echo "<h3>Run a function unique to Penguins...</h3>";
$emperor->swim();
echo "<h3>Run a Penguin function the overrides the parent...</h3>";
$emperor->fly();
	?>
	</span>
</body>
</html>