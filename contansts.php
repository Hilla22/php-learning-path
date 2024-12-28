<?php

// This creates a case-sensitive constant
define("WELCOME", "GeeksforGeeks");
echo WELCOME . "\n";

// This creates a case-insensitive constant
define("HELLO", "GeeksforGeeks", true);
echo hello;

?>
<?php
const SITE_NAME = 'GeeksforGeeks';
echo SITE_NAME;
?>
<?php

define("WELCOME", "GeeksforGeeks");

function testGlobal() {
    echo WELCOME;
}
 
echo WELCOME . "\n";
testGlobal();

?>
<?php 

class code{ 

	// Declare const class 
	const Greetings = "Welcome to geeksforgeeks"; 
} 

// Access const class 
echo code::Greetings 
?> 
<?php 

class code{ 

	// Declare const class 
	const Greetings = "Welcome to geeksforgeeks"; 
			
	public function welcome(){ 
		echo self::Greetings; 
	} 
} 

// Access const class 
$val = new code(); 
$val->welcome(); 

?> 
<?php

// Case-insensitive constants
define("Constant","Hello Geeks!",TRUE);
echo constant;
echo Constant;
?>
<?php

// Case-sensitive constant
define("Constant","Hello Geeks!");
echo constant;
echo Constant;
?>
