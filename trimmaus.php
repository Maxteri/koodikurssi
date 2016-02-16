<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Trimmaustehtävä</title>
</head>

<body>

<?php

$kokonimi=" Major  Lazer      \n"; 
echo "Alussa: " . $kokonimi . ".";

function nimi($kokonimi) {

//explode -- Split a string by string	
$nimet = explode(" ", $kokonimi); 
$kokonimi=""; 

//ucfirst -- Make a string's first character uppercase
foreach ($nimet as $nimi) { 
	$kokonimi .= ucfirst($nimi) . " "; 
} 

echo "</br>";

//trim -- Strip whitespace	(or other charachters) from the beginning and end of a string
$kokonimi = trim($kokonimi); 

	echo "Lopussa: " . $kokonimi . ".";
}
	nimi($kokonimi);
?>


</body>
</html>