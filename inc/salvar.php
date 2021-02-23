<?php
session_start();
$aposta = $_SESSION['aposta'];
$qtdjogos = $_SESSION['qtdjogos'];
$megadezenas = $_SESSION['megadezenas'];

if(isset($aposta)){
        for($i=0;$i<$qtdjogos;$i++){
            echo "<table class=\"bola\"><tr>";
                for ($i2=0;$i2<$megadezenas;$i2++){
                    echo "<td> ". $aposta[$i][$i2] . " </td>";
                }
            }
            echo "</tr></table>";       
    echo "<hr>";
}

$fp = fopen('arquivo.csv', 'w');

$cabecalho = array (
    array('BOLA1', 'BOLA2', 'BOLA3', 'BOLA4', 'BOLA5', 'BOLA6'),
);

foreach ($cabecalho as $linha1) {
    fputcsv($fp, $linha1);
}

foreach ($aposta as $linha) {
    
    fputcsv($fp , $linha);
}

fclose($fp);



?>