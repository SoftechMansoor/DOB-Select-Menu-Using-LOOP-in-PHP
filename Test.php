<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<select>
<?php

for ($x=1; $x<=31;$x++) {
	
echo"<option>$x </option> <br>";

}

?>
</select>

<?php

$months = array("","January","February","March","April","May",	"June",	"July","August",	
	"September",	
	"October",
	"November",	
	"December");
?>

<select>
	<?php

	for($x=1;$x<=12;$x++) {

		echo "<option name ='$x'> $months[$x] </option>";
	}

	?>

</select>

<select>
	<?php
for ($x=2005; $x>=1950;$x--) {
	
	echo"<option>$x </option> <br>";
}

?>
</select>

</body>
</html>