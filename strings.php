<?php

// Singlequote strings 
$site  = 'Welcome to GeeksforGeeks';

echo $site;
 
?>
<?php

// Single Quote Strings 
$site  = 'GeeksforGeeks';

echo 'Welcome to $site';

?>
<?php

// Double Quote Strings 
echo "Welcome to GeeksforGeeks \n";

$site  = "GeeksforGeeks";

echo "Welcome to $site";
 
?>
<?php
 
 $name = "Krishna";
 echo "The name of the geek is $name \n";
 echo 'The name of the geek is $name';
  
 ?>
 <?php
  
  $input  = <<<testHeredoc
 
 Welcome to GeeksforGeeks.
 Started content writing in GeeksforGeeks!.
 I am enjoying this.
 
 testHeredoc;
   
 echo $input;
    
 ?>
 <?php

$input = <<<'testNowdoc'

Welcome to GeeksforGeeks.
Started content writing in GeeksforGeeks!.

testNowdoc;

echo $input;

// Directly printing string 
// without any variable
echo <<<'Nowdoc'
Welcome to GFG .
Learning PHP is fun in GFG.
    
Nowdoc;
    
?>
<?php
 
 echo str_replace("Geeks", "World", "Hello GeeksforGeeks!"), "\n";
 echo str_replace("for", "World", "Hello GeeksforGeeks!"), "\n";
 
 ?>
 <?php

echo strpos("Hello GeeksforGeeks!", "Geeks"), "\n";

echo strpos("Hello GeeksforGeeks!", "for"), "\n";

var_dump(strpos("Hello GeeksforGeeks!", "Peek"));

?>
<?php
 
 
 $input  = "Welcome to geeksforgeeks";
   
 print_r(explode(" ",$input));
    
 ?>