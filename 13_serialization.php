<!DOCTYPE html>
<html>
<head>
	<title>Serialization</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1>Serialization</h1>
    <?php

	?>
	<p>Since objects are more sophisticated than standard variables, an extra step is required if you need to save an object to a database, or store it's state in a text file. <strong><a href="http://php.net/manual/en/function.serialize.php">serialize( )</a></strong> can be used to convert an object's data into a string. <strong><a href="http://www.php.net/manual/en/function.unserialize.php">unserialize( $string )</a></strong> can be used to convert a serialized string back into an object.</p>
<pre><code>
class MyClass{
	public $data;
	public function __construct($data){
		$this->data = $data;
	}
}

$obj = new MyClass("Shania");
echo $obj->data;
$objectAsSerializedString = serialize($obj);

//...store $objectAsSerializedString in a DB or text file
//later, when its time to retrieve (re-instantiate) the object...

$newObj = unserialize( $objectAsSerializedString );
echo $newObj->data;
</code></pre>	
<span>
    <?php
    
function __autoload($classname){
   	require_once(  "./" . $classname . ".php"   );
}
$myBird = new Bird("Yellow", "Tweet");
$myBird->demonstrateBirdness();
echo "<h3>Serializing an Object into a string...</h3>";
$serializedString = serialize($myBird);
echo "<h3>Display the serialized string...</h3>";
echo "<p>".$serializedString."</p>";
/*
at this point, we could store the string in a cookie or database...

 ...later, when we need to retrieve the Object,  
use the string to re-instantiate the object with all the same property values
 */
echo "<h3>Unserializing an Object...</h3>";
$aReinstantiatedBird = unserialize($serializedString);
echo "<h3>Demonstrate the re-instantiated Object...</h3>";
$aReinstantiatedBird->demonstrateBirdness();


	?>
	</span>
</body>
</html>