<!DOCTYPE html>
<html>
<head>
	<title>Troubleshooting</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1>Troubleshooting</h1>
	<p>The built in PHP function <a href="http://ca2.php.net/manual/en/function.print-r.php">print_r( $var )</a> can be used to quickly print to screen the contents of an object. This is useful during the debugging stage of script development, but not typically used in the final deployment</p>
<pre><code>
$obj = new MyClass();

print_r($obj); //quickly ouput the properties & values of the object
</code></pre>
<span>
    <?php
    function __autoload($classname){
    	require_once(  $classname . ".php"   );
    }
    
    $bluejay = new Bird("Yellow", "Tweet");
    echo "<h3>Use print_r() to quickly see the current state of an Object...</h3>";
    print_r($bluejay);
    echo get_class($bluejay);
	?>
	</span>
</body>
</html>