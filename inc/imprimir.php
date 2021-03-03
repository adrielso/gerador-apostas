<?php
include "class.php";
session_start();
$aposta = $_SESSION['aposta'];
$qtdjogos = $_SESSION['qtdjogos'];
$megadezenas = $_SESSION['megadezenas'];



if (isset($_GET['action']) AND $_GET['action'] == "salvar" ){

    salvar($aposta,$megadezenas,$qtdjogos);
    exit;
}


echo "<link rel=\"stylesheet\" href=\"../css/imp.css\">";


if(isset($aposta)){
        echo "<a href=\"?action=salvar\"><button class=\"botaosave\">Salvar</button></a><a href=\"?action=imprimir\" onClick=\"window.print()\"><button class=\"botao\" >Imprimir</button></a> <hr>";
        for($i=0;$i<$qtdjogos;$i++){
            echo "<table class=\"imprimir\"><tr>Aposta nº " . $i+1 ."</tr><tr>";
                for ($i2=0;$i2<$megadezenas;$i2++){
                    echo "<td> ". $aposta[$i][$i2] . " </td>";
                }
            }
            echo "</tr></table>";       
    echo "<hr>";
}

?>