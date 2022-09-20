<?php
/* 
$nomes = file_get_contents('arquivo2.txt'); //Lê todo o conteúdo de um arquivo para uma string

echo $nomes;
*/

$nomes = file('arquivo2.txt'); //  Carrega todo um arquivo em um array. 

var_dump($nomes);
