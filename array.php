<?php

// One way to create an indexed array
$name_one = array("Zack", "Anthony", "Ram", "Salim", "Raghav");

// Accessing the elements directly
echo "Accessing the 1st array elements directly:\n";
echo $name_one[2], "\n";
echo $name_one[0], "\n";
echo $name_one[4], "\n";

// Second way to create an indexed array
$name_two[0] = "ZACK";
$name_two[1] = "ANTHONY";
$name_two[2] = "RAM";
$name_two[3] = "SALIM";
$name_two[4] = "RAGHAV";

// Accessing the elements directly
echo "Accessing the 2nd array elements directly:\n";
echo $name_two[2], "\n";
echo $name_two[0], "\n";
echo $name_two[4], "\n";

?>
<?php

// Creating an indexed array
$name_one = array("Zack", "Anthony", "Ram", "Salim", "Raghav");

// One way of Looping through an array using foreach
echo "Looping using foreach: \n";
foreach ($name_one as $val){
	echo $val. "\n";
}

// count() function is used to count 
// the number of elements in an array
$round = count($name_one); 
echo "\nThe number of elements are $round \n";

// Another way to loop through the array using for
echo "Looping using for: \n";
for($n = 0; $n < $round; $n++){
	echo $name_one[$n], "\n";
}

?>
<?php

// One way to create an associative array
$name_one = array("Zack"=>"Zara", "Anthony"=>"Any", 
				"Ram"=>"Rani", "Salim"=>"Sara", 
				"Raghav"=>"Ravina");

// Second way to create an associative array
$name_two["zack"] = "zara";
$name_two["anthony"] = "any";
$name_two["ram"] = "rani";
$name_two["salim"] = "sara";
$name_two["raghav"] = "ravina";

// Accessing the elements directly
echo "Accessing the elements directly:\n";
echo $name_two["zack"], "\n";
echo $name_two["salim"], "\n";
echo $name_two["anthony"], "\n";
echo $name_one["Ram"], "\n";
echo $name_one["Raghav"], "\n";

?>
<?php

// Creating an Associative Array
$name_one = [
	"Zack" => "Zara",
	"Anthony" => "Any",
	"Ram" => "Rani",
	"Salim" => "Sara",
	"Raghav" => "Ravina",
];

// Looping through an array using foreach
echo "Looping using foreach: \n";
foreach ($name_one as $val => $val_value) {
	echo "Husband is " . $val . " and Wife is " . $val_value . "\n";
}

// Looping through an array using for
echo "\nLooping using for: \n";
$keys = array_keys($name_one);
$round = count($name_one);

for ($i = 0; $i < $round; ++$i) {
	echo $keys[$i] . " " . $name_one[$keys[$i]] . "\n";
}
?>
<?php

// Defining a multidimensional array
$favorites = array(
	array(
		"name" => "Dave Punk",
		"mob" => "5689741523",
		"email" => "davepunk@gmail.com",
	),
	array(
		"name" => "Monty Smith",
		"mob" => "2584369721",
		"email" => "montysmith@gmail.com",
	),
	array(
		"name" => "John Flinch",
		"mob" => "9875147536",
		"email" => "johnflinch@gmail.com",
	)
);

// Accessing elements
echo "Dave Punk email-id is: " . $favorites[0]["email"], "\n";
echo "John Flinch mobile number is: " . $favorites[2]["mob"];

?>
<?php
// Defining a multidimensional array
$favorites = array(
	"Dave Punk" => array(
		"mob" => "5689741523",
		"email" => "davepunk@gmail.com",
	),
	"Dave Punk" => array(
		"mob" => "2584369721",
		"email" => "montysmith@gmail.com",
	),
	"John Flinch" => array(
		"mob" => "9875147536",
		"email" => "johnflinch@gmail.com",
	)
);

// Using for and foreach in nested form
$keys = array_keys($favorites);
for($i = 0; $i < count($favorites); $i++) {
	echo $keys[$i] . "\n";
	foreach($favorites[$keys[$i]] as $key => $value) {
		echo $key . " : " . $value . "\n";
	}
	echo "\n";
}

?>
<?php 
/* First method to create an associate array. */
$student_one = array("Maths"=>95, "Physics"=>90, 
				"Chemistry"=>96, "English"=>93, 
				"Computer"=>98); 
	
/* Second method to create an associate array. */
$student_two["Maths"] = 95; 
$student_two["Physics"] = 90; 
$student_two["Chemistry"] = 96; 
$student_two["English"] = 93; 
$student_two["Computer"] = 98; 
	
/* Accessing the elements directly */
echo "Marks for student one is:\n"; 
echo "Maths:" . $student_two["Maths"], "\n"; 
echo "Physics:" . $student_two["Physics"], "\n"; 
echo "Chemistry:" . $student_two["Chemistry"], "\n"; 
echo "English:" . $student_one["English"], "\n"; 
echo "Computer:" . $student_one["Computer"], "\n"; 
?> 
<?php 
	
    /* Creating an associative array */
    $student_one = array("Maths"=>95, "Physics"=>90, 
                    "Chemistry"=>96, "English"=>93, 
                    "Computer"=>98); 
        
        
    /* Looping through an array using foreach */
    echo "Looping using foreach: \n"; 
    foreach ($student_one as $subject => $marks){ 
        echo "Student one got ".$marks." in ".$subject."\n"; 
    } 
    
    /* Looping through an array using for */
    echo "\nLooping using for: \n"; 
    $subject = array_keys($student_one); 
    $marks = count($student_one); 
        
    for($i=0; $i < $marks; ++$i) { 
        echo $subject[$i] . ' ' . $student_one[$subject[$i]] . "\n"; 
    } 
    ?> 
    