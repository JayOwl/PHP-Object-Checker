<!DOCTYPE html>
<html>
<head>
	<title>File Organization: Separate Class Files</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1>File Organization: Separate Class Files</h1>

	<p>The code for a class definition is usually contained in a single, separate file. Any scripts that need to instantiate objects from the class, must first include or require the appropriate file.</p>
	<p>A class file will not likely include any HTML formatting, it includes ONLY the PHP code that defines the class</p>
	<p><b>NOTE</b> the class filename should have the same name as the class eg: if the class name is:	<code>Car</code>	the filename should be:	 <code>Car.php</code>	</p>

	<h2>Code Design: Autoloading Separate Class Files</h2>
	<p>The magic function <strong>__autoload( )</strong> can be used to automatically load class files. This works ONLY if the class files are named appropriately (Filename.php where 'Filename' is the name of the class)</p>
<pre><code>
/* 
when an Object is created, 
__autoload will run as-needed,
loading the appropriate class file
*/
function __autoload($classFileName){
	require_once("path/to/classfiles/" . $classFileName  . ".php");
}

$obj1 = new MyClass01();	//__autoload() will load MyClass01.php
$obj2 = new MyClass02();  //__autoload() will load MyClass02.php
</code></pre>	
<span>
    <?php
/*
autoload any/all classes needed by this page
if present, this function is automaticaly invoked by PHP
*/
function __autoload($classFileName){
	/*
	whenever code in this page needs a Class definition, 
	__autoload() will be invoked
	the $parameter will be the string name of the class needed
	*/	
	require_once( $classFileName . ".php");
}

//instantiate a Bird, use it's functions
$budgie = new Bird("Black", "La la la");
$budgie->demonstrateBirdness();
	?></span>
</body>
</html>