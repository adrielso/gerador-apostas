<?php
include "config.php";

# Função para sorteio de números recebe os parametros $range minimo e máxiomo e quantidade de números para sorteio.
function sorteio_random($rangemin,$rangemax,$maxnumsorteio){

    $range = range($rangemin, $rangemax);
    shuffle($range);
    $sort_num = array_slice($range, 0, $maxnumsorteio);
    return $sort_num;

}

function salvar($aposta,$megadezenas,$qtdjogos){

    switch ($megadezenas) {
        case '6':
            $cabecalho = array(array('BOLA 01', 'BOLA 02' ,'BOLA 03' ,'BOLA 04' ,'BOLA 05' ,'BOLA 06'));
            break;
        case '7':
            $cabecalho = array(array('BOLA 01', 'BOLA 02' ,'BOLA 03' ,'BOLA 04' ,'BOLA 05' ,'BOLA 06' ,'BOLA 07'));
            break;
        case '8':
            $cabecalho = array(array('BOLA 01', 'BOLA 02' ,'BOLA 03' ,'BOLA 04' ,'BOLA 05' ,'BOLA 06' ,'BOLA 07' ,'BOLA 08'));
            break;                        
        case '9':
            $cabecalho = array(array('BOLA 01', 'BOLA 02' ,'BOLA 03' ,'BOLA 04' ,'BOLA 05' ,'BOLA 06' ,'BOLA 07' ,'BOLA 08' ,'BOLA 09'));
            break;
        case '10':
            $cabecalho = array(array('BOLA 01', 'BOLA 02' ,'BOLA 03' ,'BOLA 04' ,'BOLA 05' ,'BOLA 06' ,'BOLA 07' ,'BOLA 08' ,'BOLA 09' ,'BOLA 10'));
            break;
        case '11':
            $cabecalho = array(array('BOLA 01', 'BOLA 02' ,'BOLA 03' ,'BOLA 04' ,'BOLA 05' ,'BOLA 06' ,'BOLA 07' ,'BOLA 08' ,'BOLA 09' ,'BOLA 10' ,'BOLA 11'));
            break;
        case '12':
            $cabecalho = array(array('BOLA 01', 'BOLA 02' ,'BOLA 03' ,'BOLA 04' ,'BOLA 05' ,'BOLA 06' ,'BOLA 07' ,'BOLA 08' ,'BOLA 09' ,'BOLA 10' ,'BOLA 11' ,'BOLA 12'));
            break;
        case '13':
            $cabecalho = array(array('BOLA 01', 'BOLA 02' ,'BOLA 03' ,'BOLA 04' ,'BOLA 05' ,'BOLA 06' ,'BOLA 07' ,'BOLA 08' ,'BOLA 09' ,'BOLA 10' ,'BOLA 11' ,'BOLA 12' ,'BOLA 13'));
            break;
        case '14':
            $cabecalho = array(array('BOLA 01', 'BOLA 02' ,'BOLA 03' ,'BOLA 04' ,'BOLA 05' ,'BOLA 06' ,'BOLA 07' ,'BOLA 08' ,'BOLA 09' ,'BOLA 10' ,'BOLA 11' ,'BOLA 12' ,'BOLA 13' ,'BOLA 14'));
            break;                                                        
        case '15':
            $cabecalho = array(array('BOLA 01', 'BOLA 02' ,'BOLA 03' ,'BOLA 04' ,'BOLA 05' ,'BOLA 06' ,'BOLA 07' ,'BOLA 08' ,'BOLA 09' ,'BOLA 10' ,'BOLA 11' ,'BOLA 12' ,'BOLA 13' ,'BOLA 14' ,'BOLA 15'));
            break;                
        default:
            $cabecalho = array(array('BOLA 01', 'BOLA 02' ,'BOLA 03' ,'BOLA 04' ,'BOLA 05' ,'BOLA 06'));
            break;
    }


$file = "apostas_".rand(1,1000)."_".date('Y-m-d').".csv";

$fp = fopen('../tmp/$file', 'w');


foreach ($cabecalho as $linha1) {
    fputcsv($fp , $linha1 , ";");
}

foreach ($aposta as $linha) {
    fputcsv($fp , $linha , ";");
}

fclose($fp);

     // Set headers
     header("Cache-Control: public");
     header("Content-Description: File Transfer");
     header("Content-Disposition: attachment; filename=$file");
     header("Content-Type: text;");
     header("Content-Transfer-Encoding: binary");

     // Read the file from disk
     readfile('../tmp/$file');

}

?>
