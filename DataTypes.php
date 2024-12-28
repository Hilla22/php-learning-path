<?php

// decimal base integers
$deci1 = 50; 
$deci2 = 654; 

// octal base integers
$octal1 = 07; 

// hexadecimal base integers
$octal = 0x45; 

$sum = $deci1 + $deci2;
echo $sum;
echo "\n\n";

//returns data type and value
var_dump($sum)
  
?>
<?php

$val1 = 50.85; 
$val2 = 654.26; 

$sum = $val1 + $val2;

echo $sum;
echo "\n\n";

//returns data type and value
var_dump($sum)
  
?>
<?php

$name = "Krishna";
echo "The name of the Geek is $name \n";
echo 'The name of the geek is $name ';
echo "\n\n";

//returns data type, size and value
var_dump($name)
  
?>
<?php

if(TRUE)
    echo "This condition is TRUE";
if(FALSE)
    echo "This condition is not TRUE";

?>
<?php

$intArray = array( 10, 20 , 30);

echo "First Element: $intArray[0]\n";
echo "Second Element: $intArray[1]\n";
echo "Third Element: $intArray[2]\n\n";

//returns data type and value
var_dump($intArray);

?>