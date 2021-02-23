<?php
include "config.php";

# Função para sorteio de números recebe os parametros $range minimo e máxiomo e quantidade de números para sorteio.
function sorteio_random($rangemin,$rangemax,$maxnumsorteio){

    $range = range($rangemin, $rangemax);
    shuffle($range);
    $sort_num = array_slice($range, 0, $maxnumsorteio);
    return $sort_num;

}




?>
