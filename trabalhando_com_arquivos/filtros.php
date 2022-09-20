<?php

$arquivoNomes = fopen('arquivo3.txt', 'r');

stream_filter_append($arquivoNomes, 'string.toupper');

echo fread($arquivoNomes, filesize('arquivo3.txt'));
