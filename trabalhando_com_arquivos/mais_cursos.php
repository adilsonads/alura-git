<?php

//$arquivo = fopen('arquivo3.txt', 'w');

//$nome = 'Carolina Sup' . PHP_EOL . 'Carolina Sup' . PHP_EOL . 'Carolina Sup' . PHP_EOL . 'Carolina Sup' . PHP_EOL . 'Carolina Sup' . PHP_EOL;

$arquivo = fopen('arquivo3.txt', 'a');

$nome = 'Papai Sup' . PHP_EOL .'Papai Sup' . PHP_EOL .'Papai Sup' . PHP_EOL .'Papai Sup' . PHP_EOL .'Papai Sup' . PHP_EOL .'Papai Sup' . PHP_EOL;


fwrite($arquivo, $nome);
