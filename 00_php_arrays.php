<!DOCTYPE html>
<html>
	<head>
		<title>Php Arrays</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
	</head>
	<body>
		<h1>Php Arrays</h1>
		<p>A variable can contain only one piece of data at a time. <a href="http://php.net/manual/en/function.array.php">Arrays</a> are like compound variables: they can contain several pieces of data at the same time. Each component of data is kept separate from the others by assigning an indeces. The standard index format is to use zero-based integers...</p>
		<table border="1px">
		<tr>
		<td colspan="2">$students</td>
		</tr>
		<tr>
		<th>Index</th><th>Value</th>
		</tr>
		<tr>
		<td>0</td><td>"Joe"</td>
		</tr>
		<tr>
		<td>1</td><td>"Jane"</td>
		</tr>
		<tr>
		<td>2</td><td>"Jill"</td>
		</tr>
		<tr>
		<td>3</td><td>"Jim"</td>
		</tr>
		</table>
		<p>Data can be accessed using the name of the variable followed by square brackets that contain the index, eg <code>$students[2]</code>.</p>
<p>Arrays can contain any kind of data: strings, integers, floats, booleans, even other arrays. A single array may contain many different data types, but it is usually a better idea to have one data type per array.</p>
	<pre><code>
//creating an array
$arrayName = array("data01", "data02", "data03");

//alternative method for creating the same array:
$arrayName[] = "data01";
$arrayName[] = "data02";
$arrayName[] = "data03";

//accessing array data, changing data values
//use the array variable name and include the indeces 
//(remember: zero based index, eg: index 2 is the third in the collection)
$arrayName[2];


//change data in the same fashion as changing any variable value,
//use the index to describe which component of data to change
$arrayName[2] = "newValue";
</code></pre>
	<h2>Built in functions for array handling</h2>
	<p>This is not a complete list, but these are some of the most useful array-based built in functions:</p>
	<ul>
		<li><a href="http://ca3.php.net/manual/en/function.unset.php">unset( )</a> destroy an array variable</li>
		<li><a href="http://ca3.php.net/manual/en/function.count.php">count( )</a> determine number of array elements </li>
		<li><a href="http://ca3.php.net/manual/en/function.sort.php">sort( )</a> sorts an array</li>
		<li><a href="http://php.net/manual/en/function.in-array.php">in_array( )</a> determines if a value exists in an array</li>
	</ul>
	<h2>Formatting Arrays For Output</h2>
	<p>As always, try to use the best semantic HTML tags to format your PHP output. HTML lists are often ideal structures for displaying arrays: one list item per indeces</p>
<span>
<?php
echo "<h3>build an array using the array() built-in function<h3>";
//creating an array 
//and simultaneously adding data
$arrayName = array("data01", "data02", "data03");
$students = array("Joe","Jane","Jill","Jim");

//creating an empty array
$arrayWithNothingInItYet = array();

//adding data after an array has been created
$students[] = "Shania";
$students[] = "Jimmy";

//access array data by using
//numeric indeces in square brackets
echo "<h3>accessing array data using a square bracketed numeric index</h3>";
echo "<p>" . $students[0] . "</p>";

//you can use the index to insert data 
//into a specific location 
//(this will overwrite previous data at that position)
$students[0] = "Michael";

echo $students[0];
echo $students[0];

$students[0] = "Christine";
echo $students[0];
echo $students[1];
echo $students[2];

$students[] = "Ryan";
$students[] = "Conrad";

echo "<h3>determine the sie of an array using count()</h3>";
$numberOfItemsInArray = count($students);
echo "<p># of items in array: ".$numberOfItemsInArray ."</p>";

echo "<h3>use a 'for' loop to iterate over and display array contents</h3>";
echo "<ul>";
for(  $index = 0; $index < count($students);  $index++ ){
	echo "<li>" . $students[$index]. "</li>";
}
echo "</ul>";
echo "<h3>use a 'while' loop to iterate over and display array contents</h3>";
$index = 0;
echo "<ul>";
while($index < count($students)){
	echo "<li>". $students[$index]. "</li>";
	$index++;
}
echo "</ul>";
?>
</span>


	<hr />
	<fieldset><legend>Exercise</legend>
		<ul>
			<li>create an array and populate it with the names of 4 or more musicians/bands. at least one of the musicians should be your current favorite</li>
			<li>use either a <code>for</code> or <code>while</code> loop to output the contents of the array</li>
			<li>ensure the output is in the form of HTML list items within an unordered list</li>
			<li>as the loop iterates over your array, use an <code>if</code> statement to add a unique CSS style to the musician that is your favorite</li>
			<li>use <a href="http://ca3.php.net/manual/en/function.count.php">count( )</a> to display a message with the following format: <code>There are 6 musicians in the array.</code></li>
		</ul>
    <span>
    <?php
const TARGET_MUSICIAN = "Shania";
//build an array of musician names...
$musicians = array("Rockin Bob","Jazzy Joe",
					"Bluesey Bessie","Shania","Hip Hoppin Helen");
//add another musician, just to remind ourselves how
$musicians[] = "Sonny Gillespe";

echo "<p>There are ".count($musicians)." musicians in the array</p>";
echo "<ul>";
//loop through the array
for($index = 0; $index < count($musicians); $index++){
	if( $musicians[$index] == TARGET_MUSICIAN ){
		echo "<li style='color:yellow;'>" . $musicians[$index] . "</li>";
	}else{
		echo "<li>" . $musicians[$index] . "</li>";		
	}
}	
echo "</ul>";
	?>
    </span>
	</fieldset>
	</body>
</html>







