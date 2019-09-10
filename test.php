<?php
include "Square.php";
include "Circle.php";
$shapes[0] = new Square('hinh vuong',6);
$shapes[1] = new Rectangle('hinh chu nhat',7,8);
$shapes[2] = new Circle('hinh tron',6);

foreach ($shapes as $shape) {
   $shape->resize($shape,rand(1,100));
   echo "Hinh ".$shape->name.":<br> S: ".$shape->calculateArea()."<br>P :".$shape->calculatePerimeter()."<br>";
}