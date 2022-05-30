<?php

// O PHP trabalha com níveis de erro:
// E_WARNING = é um aviso, onde o php nao consegue fazer algo mais continua executando
// E_NOTICE = PHP encontra um problema mas consegue se virar
// E_ERROR = php nao consegue executar

//O include se ele não encontra o arquivo ele não dá erro, só um aviso
// include 'funcoes.php';
// Se for um arquivo obrigatório usamos require 
// require 'funcoes.php';

// require_once = verifica se o arquivo ja nao foi incluido
require_once 'funcoes.php';

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
    0 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    1 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    2 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes[0] = Sacar($contasCorrentes[0], 500);

$contasCorrentes[1] = Depositar($contasCorrentes[1], 500);

//string simples
foreach($contasCorrentes as $index => $conta){
    ExibeMensagem("$index $conta[titular] $conta[saldo]");
}

//string complexa
foreach($contasCorrentes as $index => $conta){
    ExibeMensagem("$index {$conta['titular']} {$conta['saldo']}");
}

echo $contasCorrentes[0];