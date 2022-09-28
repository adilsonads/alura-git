<?php
// exibir numeros impares de 1 a 100

for ($n = 1; $n <= 100; $n ++){
    if ($n % 2 != 0){  //ou poderia tbm fazer $n % 2 == 1 
        echo '#' . $n . PHP_EOL;
    }
}
