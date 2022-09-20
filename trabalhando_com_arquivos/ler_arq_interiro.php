<?php

$arquivo = fopen('arquivo2.txt', 'r');

$tamanho_arquivo = filesize('arquivo2.txt');
$nomes = fread($arquivo, $tamanho_arquivo);

echo $nomes;

fclose($arquivo);