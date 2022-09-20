<?php

$arquivo = fopen('arquivo2.txt', 'r'); //abre o arquivo

$tamanho_arquivo = filesize('arquivo2.txt'); // verifica o tamanho do arquivo
$nomes = fread($arquivo, $tamanho_arquivo); //le o arquivo com 

echo $nomes;

fclose($arquivo);