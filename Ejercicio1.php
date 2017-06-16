<?php
$variable;
$variable=23;
echo $variable + 3;
echo $variable++;
echo $variable--;
echo $variable+=5;
echo $variable-=6;

for($x=0; $x<$variable;$x++){
	echo $x;
	echo "<br>";
}

echo "<ul>";
while($variable<23){
	echo "<li>";
	echo $variable;
	echo "</li>";
	$variable++;
}
echo "</ul>";
?>
