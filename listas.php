<?php

//Instanciando um array
$idadeList = array(22,23,19,21,30,25);
//ou
$idadeList = [22,23,19,21,30,25];

// list = função que pega o valor atribuido na sequencia das variáveis passadas
//$idadeVinicius indice 0, vai pegar o indice 0 do array $idadeList
//se quiser pular um item é só deixar entre vírgulas vazia
list($idadeVinicius, $idadeJoao, $idadeMaria, , $idadeKarol) = $idadeList;

$primeiraaIdade = $idadeList[0];
$terceiraIdade = $idadeList[2];

echo $terceiraIdade;

echo "\n";

$idadeList[] = 80;

foreach($idadeList as $idade){
    echo $idade . PHP_EOL;
}

echo "$idadeVinicius, $idadeJoao, $idadeMaria, $idadeKarol";