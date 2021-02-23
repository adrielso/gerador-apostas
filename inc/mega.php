<?php
include "class.php";


    switch (isset($_GET['action'])) {
        case "geradormega":
            if(!empty($_GET['qtdjogos']) AND !empty($_GET['megadezenas'])){
                $geraaposta = new Aposta();
                $qtdjogos = $_GET['qtdjogos'];
                $megadezenas = $_GET['megadezenas'];
                for($i=0;$i<$qtdjogos;$i++){
                $aposta[$i] = $geraaposta->geraApostaMegaRandom($megadezenas);
                }
            }
            else {
                echo "<script>alert('Você deve preencher a quantidade de jogos e dezenas!');</script>";
            }
            break;
        case "salvarmega":
            $fp = fopen('arquivo.csv', 'w');
            
            foreach ($geraaposta as $linha) {
                fputcsv($fp, $linha);
            }
            fclose($fp);
            break;

            default:
            # code...
            break;
        }    
?>
<div class="gerador" >
    <form action="index.php" method="get">
        <input type="hidden" name="pg" value="mega">
        <input type="hidden" name="action" value="geradormega">
        <p>Quantidade de jogos:</p><input type="text" name="qtdjogos">
        <p>Quantidade de dezenas:</p>
        <select name="megadezenas">
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
        </select>
        <input type="submit" class="botao" value="GERAR">
    </form>
</div>
<?php
    if(isset($aposta)){
        echo "<p class=\"tituloapostas\">Apostas Geradas:</p>";
        echo "<a href=\"inc\imprimir.php\"><button class=\"botaosave\">IMPRIMIR</button></a><a href=\"index.php?pg=mega\" ><button class=\"botaoclear\">LIMPAR</button></a> <hr>";
            for($i=0;$i<$qtdjogos;$i++){
                echo "<table class=\"bola\"><tr>";
                    for ($i2=0;$i2<$megadezenas;$i2++){
                        echo "<td> ". $aposta[$i][$i2] . " </td>";
                    }
                }
                echo "</tr></table>";       
        echo "<hr>";

session_start();
$_SESSION['aposta'] = $aposta;
$_SESSION['qtdjogos'] = $qtdjogos;
$_SESSION['megadezenas'] = $megadezenas;

}
?>
<div class="confere">

</div>
