<?php

//php so trabalha com chaves inteiras ou string
$array = [
    1 => 'a',
    '1' => 'b', //se tiver so numeros o php converte pra inteiro a string
    1.5 => 'c', //converteu para inteiro
    true => 'd', //true converte pra 1
    'x' => 'x' 
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}