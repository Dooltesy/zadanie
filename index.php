<?php
require_once 'point.php';
$point = new Point;
$point->xOne = 4;
$point->yOne = 5;
$point->zOne = 6;
echo 'Первое задание: Координаты точки: '.$point->xOne.','.$point->yOne.','.$point->zOne;

$point->xTwo = 1;
$point->yTwo = 3;
$point->zTwo = 2;

$edgeX = $point->xOne - $point->xTwo;
$edgeY = $point->yOne - $point->yTwo;
$hypotenuseXY = sqrt(pow($edgeX, 2) + pow($edgeY, 2));
$edgeZ = $point->zOne - $point->zTwo;
$hypotenuseXYZ = sqrt(pow($hypotenuseXY, 2) + pow($edgeZ, 2));

echo '<br/>'.'Второе задание: Координаты двух точек: '.$point->xOne.','.$point->yOne.','.$point->zOne.' и '.$point->xTwo.','.$point->yTwo.','.$point->zTwo.'<br/>';
echo 'Ответ: ';
var_dump(round($hypotenuseXYZ, 2));
?>