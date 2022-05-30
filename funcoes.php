<?php
echo "Olá. Arquivo de funções aqui." . PHP_EOL;

function ExibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function Sacar(array $conta, float $valor) : array
{
    if($valor > $conta['saldo']){
        ExibeMensagem("Você não pode sacar");
    }
    else{
        $conta['saldo'] -= $valor;
    }
    return $conta;
}

function Depositar(array $conta, float $valor) : array{
    if($valor > 0){
        $conta['saldo'] += $valor;
    }
   else{
       ExibeMensagem("Valor de deposito deve ser positivo");
   }
   return $conta;
}