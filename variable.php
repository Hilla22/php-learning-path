<?php
$name = "XYZ";  // String
$age = 30;       // Integer
$salary = 45000.50; // Float
$isEmployed = true; // Boolean
?>

<?php

$num = 60;

function local_var() {

    // This $num is local to this function

    // The variable $num outside the function
    // is a completely different
    $num = 50;
    echo "Variable num inside function is: $num \n";
}

local_var();

// The $num outside function is a completely 
// different from inside local_var()
echo "Variable num outside function is: $num";

?>
<?php

$num = 20;

// Function to demonstrate use of global variable
function global_var() {
  
    // We have to use global keyword before 
    // the variable $num to access within 
    // the function
    global $num;
    
    echo "Variable num inside function: $num \n";
}

global_var();

echo "Variable num outside function: $num \n";

?>
<?php

// Function to demonstrate static variables
function static_var() {
  
    // Static Variable
    static $num = 5;
    $sum = 2;
    
    $sum++;
    $num++;
    
    echo $num, "\n";
    echo $sum, "\n";
}

// First function call
static_var();

// Second function call
static_var();

?>

<?php
  
// Using $_SERVER superglobal to
// get server information
echo $_SERVER['SERVER_NAME'];
?>
<?php
   $a = 'hello'; //hello is value of variable $a
   $$a = 'World'; //$($a) is equals to $(hello)
   echo $hello; //$hello is World i.e. $hello is new variable with value 'World'
?>