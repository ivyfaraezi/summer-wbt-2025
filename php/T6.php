<?php
$array = array(1, 2, 3, 4, 5);
$searchElement = 3;
$found = false;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $searchElement) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Element " . $searchElement . " found in the array.";
} else {
    echo "Element " . $searchElement . " not found in the array.";
}
?>