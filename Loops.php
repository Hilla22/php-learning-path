<?php 

// Code to illustrate for loop
for ($num = 1; $num <= 5; $num += 1) {
    echo $num . " ";
} 

?>
<?php
  
  $num = 1;
  
  while ($num <= 5) {
      echo $num . " ";
      $num++;
  }
  
  ?>

<?php

$num = 1;

do {
    echo $num . " ";
    $num++;
} while ($num <= 5);

?>

<?php

// foreach loop over an array  
$arr = array (10, 20, 30, 40, 50, 60);

foreach ($arr as $val) { 
    echo $val . " ";
}

echo "\n";
    
// foreach loop over an array with keys
$ages = array(
      "John" => 25, 
      "Alice" => 30, 
      "Bob" => 22
);

foreach ($ages as $name => $age) { 
    echo $name . " => " . $age . "\n";
}

?>
<?php 

// Declare a number 
$num = 10; 

// While Loop 
while ($num < 20) { 
    echo $num . "\n"; 
    $num += 2; 
} 
?>
<?php 

// Declare a number 
$num = 10; 

// While Loop 
while ($num < 20): 
    echo $num . "\n"; 
    $num += 2; 
endwhile; 
?>
<?php 

// Declare a number 
$num = 10; 

// do-while Loop 
do
{ 
    echo $num . "\n"; 
    $num += 2; 
} while ($num < 20); 

?>
<?php 

// Declare a number 
$num = 0; 

// do-while Loop 
do
{ 
    $num += 5; 
    echo $num . "\n"; 
    
} while ($num < 20); 

?>
