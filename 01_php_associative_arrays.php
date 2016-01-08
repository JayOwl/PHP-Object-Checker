<!DOCTYPE html>
<html>
	<head>
		<title>Php Arrays</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
	</head>
	<body>
		<h1>Php Arrays</h1>
		<h2>Associative Arrays</h2>
<p><a href="http://php.net/manual/en/function.array.php">Arrays</a> by default use integer indeces, but may instead use strings as indeces. String-indexed arrays are known as <strong>associative</strong>. The indeces names are determined by the developer, and each must be unique, alphanumeric, case sesnsitive, with no spaces</p>	<pre><code>
//put several pieces of data into an associative array all at once
//this can only be done at the time of creation
//use the => operator to create the "key"=>"value" pairs
$arrayofMusicians = array("jazz"=>"John Coltrane", "classical"=>"Wolfgang Mozart");

//or put one piece of data into an associative array at a time
$arrayofMusicians['blues'] = "Sonny boy Williamson";
$arrayofMusicians['reggae'] = "Desmond Decker";

//re-assign data in an associative array
$arrayofMusicians['classical'] = "Ludwig Van Beethoven";

//access data from an associative array
echo $arrayofMusicians['classical'];
</code></pre>	        
<span>
<?php
//put several pieces of data into an associative array all at once
//this can only be done at the time of creation
//use the => operator to create the "key"=>"value" pairs
$arrayofMusicians = array("jazz"=>"John Coltrane", "classical"=>"Wolfgang Mozart", "hiphop"=>"Jazzy jeff");

//or put one piece of data into an associative array at a time
$arrayofMusicians["blues"] = "Sonny boy Williamson";
$arrayofMusicians["reggae"] = "Desmond Decker";

//re-assign data in an associative array
$arrayofMusicians['classical'] = "Ludwig Van Beethoven";

//access data from an associative array
echo "<p>". $arrayofMusicians['classical'] . "</p>";
echo "<p>blues: " . $arrayofMusicians["blues"] . "</p>";
echo "<p>reggae: " . $arrayofMusicians["reggae"] . "</p>";

echo "<p>Displaying the names of the indeces...</p>";
$associative_indeces = array_keys($arrayofMusicians);
echo "<ul>";
foreach($associative_indeces as $anIndex){
	echo "<li>$anIndex</li>";
	
}
echo "</ul>";
?>
</span>
<h2>Array Utility Function</h2>
<ul>
	<li><a href="http://php.net/manual/en/function.array-keys.php">array_keys( )</a> determine the names of all indeces (useful if you dont know what associative indeces have been used)</li>
</ul>

</span>
	<fieldset><legend>Exercise</legend>
		<ul>
			<li>create and populate an associative array for storing the following information: 
			<ul>
				<li>First name</li>
				<li>Last name</li>
				<li>Student number</li>
			</ul></li>
			<li>display the contents of the array following this format:
			<ul>
				<li>First name: Shania</li>
				<li>Last name: Someperson</li>
				<li>Student number: A00123456</li>
			</ul></li>
		</ul>
<span>
<?php
$studentInformation = array("firstName"=>"Johnathan", "lastName"=>"Coltraneous", "studentNumber"=>"A00123456");

echo "<p>First name: ". $studentInformation["firstName"] ."</p>";
echo "<p>Last name: ". $studentInformation["lastName"] ."</p>";
echo "<p>Student number: ". $studentInformation["studentNumber"] ."</p>";
?>
</span>
	</body>
</html>







