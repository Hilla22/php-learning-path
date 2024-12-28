<?php

function funcGeek() 
{
    echo "This is Geeks for Geeks";
}

// Calling the function
funcGeek();

?>
<?php

// function along with three parameters
function proGeek($num1, $num2, $num3) 
{
    $product = $num1 * $num2 * $num3;
    echo "The product is $product";
}

// Calling the function
// Passing three arguments
proGeek(2, 3, 5);

?>
<?php

// function with default parameter
function defGeek($str, $num=12) 
{
    echo "$str is $num years old \n";
}

// Calling the function
defGeek("Ram", 15);

// In this call, the default value 12 
// will be considered
defGeek("Adam");

?>
<?php

// function along with three parameters
functionproGeek ($num1, $num2, $num3) 
{
    $product = $num1 * $num2 * $num3;
    
    return $product; //returning the product
}

// storing the returned value
$retValue = proGeek(2, 3, 5);
echo "The product is $retValue";

?>
<?php

// pass by value
function valGeek($num) {
    $num += 2;
    return $num;
}

// pass by reference
function refGeek(&$num) {
    $num += 10;
    return $num;
}

$n = 10;

valGeek($n);
echo "The original value is still $n \n";

refGeek($n);
echo "The original value changes to $n";

?>
<?php 

// Declare an array 
$arr = [1, 2, 3, 4, 5, 6, 7]; 

$sum = array_reduce($arr, fn($carry, $item) => $carry + $item); 

echo $sum; 
?>
