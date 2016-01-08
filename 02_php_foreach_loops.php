<!DOCTYPE html>
<html>
	<head>
		<title>Php Foreach Loops</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
	</head>
	<body>
		<h1>Php Foreach Loops</h1>
<p>The <a href="">foreach</a> loop is for convenient looping through arrays. Though a <code>for</code> or <code>while</code> loop could be used to iterate over an array, the <code>foreach</code> is easier to deploy, requiring less code.</p>

<h2>The pattern for defining a foreach loop:</h2><pre><code>	foreach($entireArray as $oneItemInArray){
		body of the loop (repeated code)
	}</code></pre>
<ol>
	<li><code>$entireArray</code> the array to be iterated over</li>
	<li><code>$oneItemInArray</code> is assigned the value from the current indeces</li>
	<li>each time the loop body is executed, <code>$oneItemInArray</code> is the next array value</li>
</ol>

<h2>Code Example:</h2>
<pre><code>
	//prepare an array to iterate over
	$arrayOfNames = array("Jill","Joe","Jane");

	//use foreach to iterate over the array
	foreach($arrayOfNames as $oneNameFromArray){
		echo $oneNameFromArray;
	}
</pre></code>
	<hr />
	<fieldset><legend>Exercise</legend>
		<ul>
			<li>use the arrays built from todays earlier exercises</li>
			<li>use a foreach loop with each of your arrays to output their contents as HTML unordered lists</li>
		</ul>
<span>
<?php
echo "<h3>Output a numeric indexed array...</h3>";
$arrayOfNames = array("Jill","Joe","Jane");
foreach( $arrayOfNames as $oneName ){
	echo "<p>" . $oneName . "</p>";
}

echo "<h3>Output an associative array...</h3>";
$arrayofMusicians = array("jazz"=>"John Coltrane", "classical"=>"Wolfgang Mozart", "hiphop"=>"Jazzy jeff");
foreach($arrayofMusicians as $musician){
	echo "<p>" . $musician . "</p>";
}
?>
</span>

	</fieldset>
	</body>
</html>