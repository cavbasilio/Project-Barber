<?php

$array = [
   
    'primeiro', 
           
    1 => 'segundo',
        
    'terceiro'];

sort($array);
var_dump($array);




/*  nota 1 para 2 = ordem crescente
    nota 2 para 1 = ordem descrescente

    function ordenaNotas(array $nota1, array $nota2): int
{
        return  $nota1['nota'] <=> $nota2['nota'];
}

usort($notas, 'ordenaNotas');

var_dump($notas);



REPETIÇÃO ACRESCENTANDO +1
/*
for($contador = 0; $contador <= 100; $contador += 2){
    echo "#$contador" . PHP_EOL;
}*/ 