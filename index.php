<?php

//require __DIR__ . '/vendor/autoload.php';
    require __DIR__.'/auto/backmove.php';
    require __DIR__.'/auto/car.php';
    require __DIR__.'/auto/engine.php';
    require __DIR__.'/auto/niva.php';
    require __DIR__.'/auto/transmissiomanual.php';
    require __DIR__.'/auto/transmissionauto.php';
//testing work base class
$car = new \auto\car(100);
//init niva cо 100 л.с. и ручной коробкой, движение на 1000 метров скорость 50 м /с
$niva_100ls = new \auto\niva(100, "ручная");
$niva_100ls->startMove(1000, 50, "вперед");
//init niva  200 л с
//$niva_200ls = new \Auto\niva(200, "автоматическая");
//$niva_200ls->startMove(20000, 200, "назад");
