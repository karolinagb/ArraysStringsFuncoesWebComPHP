<?php

$conta1 = 

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];



$contasCorrentes = 
[
    '0-' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '1-' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    "2-" => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

//Eu defino a chave se ela fizer sentido como no caso do cpf
$contasCorrentes['123456789-00'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

$contasCorrentes[] = [
    'titular' => 'Karol',
    'saldo' => 2000
];

foreach($contasCorrentes as $index => $conta){
    echo $index ."-" . $conta['titular'] . PHP_EOL;
}