<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").toggle();
    });
});
</script>
<title>Trimmaustehtävä</title>
</head>

<body>

<?php

$kokonimi=" Major  Lazer      \n"; 
echo "<p>Alussa:</p> " . $kokonimi . ".";

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

	echo "<p>Lopussa:</p> " . $kokonimi . ".";
}
	nimi($kokonimi);
?>
<br>
<button>Piilota / Näytä</button>

</body>
</html>
