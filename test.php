<?php
include "Square.php";
include "Circle.php";
$_square = new Square('hinh vuong',6);

echo "---------------Hinh vuong------------<br>".$_square->resize($_square);
echo "<br>";
$_rectangle = new Rectangle('hinh chu nhat',7,8);

echo "---------------Hinh chu nhat------------<br>".$_rectangle->resize($_rectangle);
echo "<br>";
$_circle = new Circle('hinh vuong',6);

echo "---------------Hinh tron------------<br>".$_circle->resize($_circle);