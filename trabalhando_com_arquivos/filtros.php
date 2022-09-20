<?php

$arquivoNomes = fopen('arquivo3.txt', 'r'); //Função que abre o arquivo

stream_filter_append($arquivoNomes, 'string.toupper'); //função para criar filtros no arquivo

echo fread($arquivoNomes, filesize('arquivo3.txt'));
