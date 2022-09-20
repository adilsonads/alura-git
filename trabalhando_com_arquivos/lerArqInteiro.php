<?php
/* 
$nomes = file_get_contents('arquivo2.txt');

echo $nomes;
*/

$nomes = file('arquivo2.txt');

var_dump($nomes);
