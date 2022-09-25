<?php

$nome = 'Adilson Costa';
$email = 'vinícius@alura.com.br';
$senha = 'áéíóú';
/*
echo mb_strlen($senha) . PHP_EOL; // função que identifica o tamanho da string

if (mb_strlen($senha) < 8) { // verifica se a string é maior que 8
    echo 'Senha insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@'); // indetifica onde esta o caracter "@"

$usuario = substr($email, 0, $posicaoDoArroba); //

echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;
*/
list($nome, $sobrenome ) = explode(' ',$nome);

echo 'Nome ' . $nome . PHP_EOL;
echo 'Sobrenome ' . $sobrenome . PHP_EOL;