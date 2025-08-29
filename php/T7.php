<?php

for ($i = 1; $i <= 3; $i++) {
	for ($j = 1; $j <= $i; $j++) {
		echo "* ";
	}
	echo "\n";
}
echo "\n";

$num = 1;
for ($i = 3; $i >= 1; $i--) {
	for ($j = 1; $j <= $i; $j++) {
		echo $num++ . " ";
	}
	echo "\n";
	$num = 1;
}
echo "\n";

$ch = 'A';
for ($i = 1; $i <= 3; $i++) {
	for ($j = 1; $j <= $i; $j++) {
		echo $ch . " ";
		$ch++;
	}
	echo "\n";
}
?>