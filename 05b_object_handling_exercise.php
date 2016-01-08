<!DOCTYPE html>
<html>
<head>
	<title>Object Handling Exercise</title>
	<link rel="stylesheet" href="http://bcitcomp.ca/twd/css/style.css" />

</head>
<body>
	<h1>Object Handling Exercise</h1>
<ul>
	<li>Obtain a copy of the ArrayFormatter.php class file</li>
	<li>Read the source code and comments to get an idea of what public functions are available to you</li>
    <li>Load the ArrayFormatter.php class file into this page (eg: by useing <code>include( )</code>)</li>
    <li>Instantiate an ArrayFormatter object</li>
    <li>Create an array containing 3 or more of your classmate's names</li>
    <li>Use the ArrayFormatter object's public functions to do the following (read the function comments to help you learn how to use them):
    	<ul>
    		<li>Run the function <code>displayArrayAsList( $anyArray )</code> using your array of student names</li>
	        <li>Run the function <code>setTypeOfHTMLList( $listType )</code> to change the type of list being displayed</li>
            <li>Run <code>displayArrayAsList( $anyArray )</code> again to prove the list type has changed</li>        
			<li>Run <code>getArrayAsList( $anyArray )</code> then display the results to the screen</li>                    
        </ul>
    </li>
    <li>Show your instructor when complete</li>

</ul>
	<span>
    <?php
//some arrays to work with
$arrayOfStudents		= array("Jill","Jane","John","Joe","Janet","Jethro");
$arrayOfNumbers			= array(23, 123, 12, 43, 4512, 1234, 3434, 12, 3);
$musicians				= array("Jack","Jill","Joe","Jane");

//load the class file
include("ArrayFormatter.php");
//instantiate a new ArrayFormatter object
$myArrayFormatter	= new ArrayFormatter();
//invoke some public functions
$myArrayFormatter->setTypeOfHTMLList("ol");
$myArrayFormatter->displayArrayAsList($musicians );
$myArrayFormatter->setTypeOfHTMLList("ul");
echo $myArrayFormatter->getArrayAsList($musicians );

//clear the ArrayFormatter from memory when we are done with it
unset($myArrayFormatter);

	?>
	</span>
<h2>Standard Object Handling Reminder</h2><pre><code>require_once("MyClass.php");	//load class file
$myObject = new MyClass();	//instantiate a new Object
$myObject->functionName();	//use the Object's public functions as needed
unset($myObject);   		//delete Object when finished</code></pre>     
 
       
</body>
</html>