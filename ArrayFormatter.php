<?php
/*
ArrayFormatter's best public functions
-------------------------------
1.	displayArrayAsList($array);
displays a PHP array as an HTML list
parameters: $array 
			any array may be provided

2.  getArrayAsList();
unlike displayArrayAsList(), this function will not display anything
instead, it returns the HTML list as a string

3.	setTypeOfHTMLList("ol");
		OR
	setTypeOfHTMLList("ul");
change the type of HTML list that will display
-------------------------------

Code Design: Seperate Class Files

The code for a class definition is usually contained in a single, separate file. Any scripts that need to instantiate objects from the class, must first include or require the appropriate file.

A class file will not likely include any HTML formatting
It includes ONLY the PHP code that defines the class

NOTE the class filename should have the same name as the class
eg:
	if the class name is:	 Car
	the filename should be:	 Car.php	
*/
class ArrayFormatter{
	/*
	--------------------------------------------------------
	PROPERTIES	-	define the properties of this Class
					since these are usually 'private',
					the only way they can be worked with
					is if we provide 'public' functions
					
					every property has its own 
						GETTER	getVariableName(){ return $this->value;}
						SETTER	setVariableName($value){}
	*/		
	const 	UNORDERED_LIST	=	"ul";
	const 	ORDERED_LIST	=	"ol";	
	private $typeOfHTMLList;
	/*
	--------------------------------------------------------
	CONSTRUCTOR - 	initialize the object variables
					automatically invoked
					as soon as the Object is created
	*/	
	public function __construct(   ){
		echo "<p>A new ArrayFormatter is being born!</p>";
		$this->setTypeOfHTMLList(self::UNORDERED_LIST);
	}
	/*
	--------------------------------------------------------
	GETTERS	- 	provide access to the value of a property
	*/	
	public function getTypeOfHTMLList(){
		return "This object is currently using '".$this->typeOfHTMLList."' tags to build the array list.";
	}
	/*
	--------------------------------------------------------
	SETTERS	-	permit changing the value of a property

	setTypeOfHTMLList( $listType)
		PARAMETER		$listType	- this needs to be a string
									- "ol"  or  "ul"
									- depnding on which type of list is desired
	*/	
	public function setTypeOfHTMLList( $listType){
		if($listType == self::ORDERED_LIST){
			$this->typeOfHTMLList = self::ORDERED_LIST;
		}else{
			$this->typeOfHTMLList = self::UNORDERED_LIST;
		}
	}
	/*
	--------------------------------------------------------
	OTHER
	
	displayArrayAsList( $anyArray)
		PARAMETER		$anyArray	- any array provided
									will be displyed to the screen
									as an HTML list
	*/		
	public function displayArrayAsList( $anyArray )	{
		echo "<".$this->typeOfHTMLList.">";
		foreach($anyArray as $item){
			echo "<li>" . $item. "</li>";
		}
		echo "</".$this->typeOfHTMLList.">";
	}
	
	/*	
	getArrayAsList( $anyArray)
		PARAMETER		$anyArray	- any array provided
									will be used to build a string
									HTML list, suitable for later
									displaying to the screen
		RETURN			$listAsString - a string containing
									the code for an HTML list
	*/		
	public function getArrayAsList( $anyArray )	{
		$listAsString =  "<".$this->typeOfHTMLList.">";
		foreach($anyArray as $item){
			$listAsString .= "<li>" . $item. "</li>";
		}
		$listAsString .= "</".$this->typeOfHTMLList.">";
		return $listAsString;
	}
	/*
	--------------------------------------------------------
	DESTRUCTOR - 	destroys all the object variables
					clears memory
	*/	
	public function __destruct(   ){
		echo "<p>An ArrayFormatter has been deleted!</p>";
	}	
}

?>
