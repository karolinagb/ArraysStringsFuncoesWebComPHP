<?php

//Instanciando um array
$idadeList = array(22,23,19,21,30,25);
//ou
$idadeList = [22,23,19,21,30,25];

$primeiraaIdade = $idadeList[0];
$terceiraIdade = $idadeList[2];

echo $terceiraIdade;

echo "\n";

$idadeList[] = 80;

foreach($idadeList as $idade){
    echo $idade . PHP_EOL;
}