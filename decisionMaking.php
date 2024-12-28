<?php 
$x = 12; 

if ($x > 0) { 
	echo "The number is positive"; 
} 
?> 

<?php 
$x = -12; 

if ($x > 0) { 
	echo "The number is positive"; 
} 

else{ 
	echo "The number is negative"; 
} 
?> 

<?php 
$x = "August"; 

if ($x == "January") { 
	echo "Happy Republic Day"; 
} 

elseif ($x == "August") { 
	echo "Happy Independence Day!!!"; 
} 

else{ 
	echo "Nothing to show"; 
} 
?> 

<?php 
$n = "February"; 

switch($n) { 
	case "January": 
		echo "Its January"; 
		break; 
	case "February": 
		echo "Its February"; 
		break; 
	case "March": 
		echo "Its March"; 
		break; 
	case "April": 
		echo "Its April"; 
		break; 
	case "May": 
		echo "Its May"; 
		break; 
	case "June": 
		echo "Its June"; 
		break; 
	case "July": 
		echo "Its July"; 
		break; 
	case "August": 
		echo "Its August"; 
		break; 
	case "September": 
		echo "Its September"; 
		break; 
	case "October": 
		echo "Its October"; 
		break; 
	case "November": 
		echo "Its November"; 
		break; 
	case "December": 
		echo "Its December"; 
		break; 
	default: 
		echo "Doesn't exist"; 
} 
?> 

<?php 
$x = -12; 

if ($x > 0) { 
	echo "The number is positive \n"; 
} 
else { 
	echo "The number is negative \n"; 
} 

// This whole lot can be written in a 
// single line using ternary operator 
echo ($x > 0) ? 'The number is positive' : 
				'The number is negative'; 
?> 
