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

function Depositar(array $conta, float $valor) : array
{
    if($valor > 0){
        $conta['saldo'] += $valor;
    }
   else{
       ExibeMensagem("Valor de deposito deve ser positivo");
   }
   return $conta;
}

// &  = ASSIM estou informando que quero receber o endereço pra conta original e não um clone dela
//assim quando alterarmos o valor do nome do titular pra maiusculo, ele vai alterar na conta original
//temos como passar o parâametro por valor e por referência
function TitularComLetrasMaiusculas(array &$conta)
{
    // mb_strtoupper = essa funcao pega uma string e coloca todos os caracteres em letra maiúscula
    // Ela faz parte de uma biblioteca que podemos habilitar
    // biblioteca mbstring dá suporte a outros tipos de caracteres
    //Para nao habilitar essa biblioteca, eu poderia usar a biblioteca padrão do php que é strtoupper
    $conta['titular'] = mb_strtoupper($conta['titular']);

    echo $conta['titular'] . PHP_EOL;
}