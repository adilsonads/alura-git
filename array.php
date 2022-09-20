<?php

$array = [
    1 => 'um',
    2 => 'dois'
];
//var_dump($array);
//$contador = 0;

foreach ($array as $numeral => $nomeNumero){
    echo "$numeral escrito por extenso fica assim: $nomeNumero ". PHP_EOL;

    $contador++;
}
//echo $contador; FORMA ERRADA DE SE EXIBIR O TOTAL DO CONTADOR, CONSOME MAIS RECURSO 
echo 'Total: ' . count($array) . PHP_EOL; //FORMA CORRETA DE SE EXIBIR O TOTAL DO CONTADOR, CONSOME MENOS RECURSO (pode se usar tbm o sizeof)