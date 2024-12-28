<?php
$x = 300;
$y = 200;

function multiplication(){
	$GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}

multiplication();
echo $z;
?>
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>"
?>
