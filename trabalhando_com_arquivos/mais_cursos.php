<?php

//$arquivo = fopen('arquivo3.txt', 'w');// abre um arquivo 'w' caso não exista cria um arquivo

//$nome = 'Carolina Sup' . PHP_EOL . 'Carolina Sup' . PHP_EOL . 'Carolina Sup' . PHP_EOL . 'Carolina Sup' . PHP_EOL . 'Carolina Sup' . PHP_EOL;

$arquivo = fopen('arquivo3.txt', 'a');// abre o arquivo e escreve nele

$nome = 'Papai Sup' . PHP_EOL .'Papai Sup' . PHP_EOL .'Papai Sup' . PHP_EOL .'Papai Sup' . PHP_EOL .'Papai Sup' . PHP_EOL .'Papai Sup' . PHP_EOL;


fwrite($arquivo, $nome); // escreve no arquivo o conteudo alocado na variavel
