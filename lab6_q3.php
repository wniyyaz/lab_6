<?php 
function calculateArea($width, $height) {
    return $width * $height;
}
$width = 4;
$height = 2;
$area = calculateArea($width, $height);

echo "<b>The area of a rectangle with a width of $width and a height of $height is $area.</b>";
?>
