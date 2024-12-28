<?php
// Define two numbers
$x = 10;
$y = 3;

// Addition
echo "Addition: " . ($x + $y) . "\n";

// Subtraction
echo "Subtraction: " . ($x - $y) . "\n";

// Multiplication
echo "Multiplication: " . ($x * $y) . "\n";

// Division
echo "Division: " . ($x / $y) . "\n";

// Exponentiation
echo "Exponentiation: " . ($x ** $y) . "\n";

// Modulus
echo "Modulus: " . ($x % $y) . "\n";
?>

<?php
$x = 50;
$y = 30;
  if ($x == 50 and $y == 30)
      echo "and Success \n";

  if ($x == 50 or $y == 20)
      echo "or Success \n";

  if ($x == 50 xor $y == 20)
      echo "xor Success \n";

  if ($x == 50 && $y == 30)
      echo "&& Success \n";

  if ($x == 50 || $y == 20)
      echo "|| Success \n";

  if (!$z)
      echo "! Success \n";
?>
<?php
  $a = 80;
  $b = 50;
  $c = "80";

  // Here var_dump function has been used to 
  // display structured information. We will learn 
  // about this function in complete details in further
  // articles

  var_dump($a == $c) + "\n";
  var_dump($a != $b) + "\n";
  var_dump($a <> $b) + "\n";
  var_dump($a === $c) + "\n";
  var_dump($a !== $c) + "\n";
  var_dump($a < $b) + "\n";
  var_dump($a > $b) + "\n";
  var_dump($a <= $b) + "\n";
  var_dump($a >= $b);
?>


<?php
  // Simple assign operator
  $y = 75;
  echo $y, "\n";

  // Add then assign operator
  $y = 100;
  $y += 200;
  echo $y, "\n";

  // Subtract then assign operator
  $y = 70;
  $y -= 10;
  echo $y, "\n";

  // Multiply then assign operator
  $y = 30;
  $y *= 20;
  echo $y, "\n";

  // Divide then assign(quotient) operator
  $y = 100;
  $y /= 5;
  echo $y, "\n";

  // Divide then assign(remainder) operator
  $y = 50;
  $y %= 5;
  echo $y;
?>