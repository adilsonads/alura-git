<?php

function gerarEmail(string $nome): void{
        //heredoc utilizado como se fosse "asdfgg" para escrever uma string sem que ela seja identada <<FIM
        //podese usar tbm nowdoc que é quivalente a '', forma de usar <<<'FIM'
    $conteudodoEmail = <<<FINAL
    Ola, $nome!

    Estamos entrando em contatos para
    {motivo do contato}

    {assinatura}
    
    FINAL;

    echo $conteudodoEmail;
}
gerarEmail('Adilson');