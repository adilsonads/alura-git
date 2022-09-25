<?php

$email = ',. adilson@alura.com.br ,.';
$senha = 'áéíóú';

echo mb_strlen($senha) . PHP_EOL; // função descobre tamanho da string

if (mb_strlen($senha) < 8) { // função verifica se a string é maior que 8 caracteres
    echo 'Senha insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@'); // função identifica a posição do caracter desejado "@"

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;
echo trim($email) . PHP_EOL;
echo ltrim($email, ',') . PHP_EOL;
echo rtrim($email, ',') . PHP_EOL;
