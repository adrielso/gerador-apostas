<?php
//Include de arquivo de funções básicas utilizada pelas classes.
include "funcoes.php";
include "config.php";

class Mega {

    private $num1_mega_sorteio;
    private $num2_mega_sorteio;
    private $num3_mega_sorteio;
    private $num4_mega_sorteio;
    private $num5_mega_sorteio;
    private $num6_mega_sorteio;
    private $num_concurso_mega;
    private $data_concurso_mega;

    function consultaDadosMega(){
        include "config.php";

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        } 
        catch (PDOException $pe) {
            die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
        }

            $consulta = 'SELECT * from apostas_mega';

            foreach ($conn->query($consulta) as $row ){
            print $row['CONCURSO'] . "\t";
            print $row['DATA'] . "\t";
            print $row['B1'] . "\n";
            }

    }

    function adicionaDadosMega($concurso,$data,$b1,$b2,$b3,$b4,$b5,$b6,$ganhadores,$premio){
        include "config.php";

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        } 
        catch (PDOException $pe) {
            die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
        }

            $stmt = $conn->prepare("INSERT INTO `apostas_mega`(`CONCURSO`, `DATA`, `B1`, `B2`, `B3`, `B4`, `B5`, `B6`, `GANHADORES`, `PREMIO`) VALUES ($concurso,$data,$b1,$b2,$b3,$b4,$b5,$b6,$ganhadores,$premio)");
            $stmt->execute();

    }

}

class LotoFacil{

    private $num1_mega_sorteio;
    private $num2_mega_sorteio;
    private $num3_mega_sorteio;
    private $num4_mega_sorteio;
    private $num5_mega_sorteio;
    private $num6_mega_sorteio;
    private $num7_mega_sorteio;
    private $num8_mega_sorteio;
    private $num9_mega_sorteio;
    private $num10_mega_sorteio;
    private $num11_mega_sorteio;
    private $num12_mega_sorteio;
    private $num13_mega_sorteio;
    private $num14_mega_sorteio;
    private $num15_mega_sorteio;
    private $num_concurso_mega;
    private $data_concurso_mega;

}


class Aposta {

    private $numeros_aposta;

    function geraApostaMegaRandom($max_num){

        switch ($max_num) {
            case '6':
                $sortnum = sorteio_random(1,60,6);
                for ($i=0;$i<=5;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
               
                return $this->numeros_aposta;
                break;
            case '7':
                $sortnum = sorteio_random(1,60,7);
                for ($i=0;$i<=6;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;
            case '8':
                $sortnum = sorteio_random(1,60,8);
                for ($i=0;$i<=7;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;
            case '9':
                $sortnum = sorteio_random(1,60,9);
                for ($i=0;$i<=8;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;
            case '10':
                $sortnum = sorteio_random(1,60,10);
                for ($i=0;$i<=9;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;
            case '11':
                $sortnum = sorteio_random(1,60,11);
                for ($i=0;$i<=10;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;
            case '12':
                $sortnum = sorteio_random(1,60,12);
                for ($i=0;$i<=11;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;
            case '13':
                $sortnum = sorteio_random(1,60,13);
                for ($i=0;$i<=12;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;
            case '14':
                $sortnum = sorteio_random(1,60,14);
                for ($i=0;$i<=13;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;
            case '15':
                $sortnum = sorteio_random(1,60,15);
                for ($i=0;$i<=14;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break; 
                                                                                                                                                                                    
            default:
                $sortnum = sorteio_random(1,60,6);
                for ($i=0;$i<=5;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;
        }

    }
    function geraApostaLotoRandom($max_num){

        switch ($max_num) {
            case '15':
                $sortnum = sorteio_random(1,25,15);
                for ($i=0;$i<=14;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;
            case '16':
                $sortnum = sorteio_random(1,25,16);
                for ($i=0;$i<=15;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;
            case '17':
                $sortnum = sorteio_random(1,25,17);
                for ($i=0;$i<=16;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;
            case '18':
                $sortnum = sorteio_random(1,25,18);
                for ($i=0;$i<=17;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;
            case '19':
                $sortnum = sorteio_random(1,25,19);
                for ($i=0;$i<=18;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;
            case '20':
                $sortnum = sorteio_random(1,25,20);
                for ($i=0;$i<=19;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;                                                                                                                                                     
            default:
                $sortnum = sorteio_random(1,60,6);
                for ($i=0;$i<=5;$i++){
                    $this->numeros_aposta[$i] = $sortnum[$i];
                }
                return $this->numeros_aposta;
                break;
        }

    }
}

/*
$adicionar = new Mega();
$consulta1 = $adicionar->adicionaDadosMega(2344,20210213,11,17,25,38,52,57,0,0); 
*/
/*
$apostamegarandom = new Aposta();

$aposta1 = $apostamegarandom->geraApostaMegaRandom(15);

$apostalotorandom = new Aposta();

$aposta2 = $apostalotorandom->geraApostaLotoRandom(20);

echo "<br> Mega Sena <br>";
var_dump($aposta1);

echo "<br> Lotofácil <br>";
var_dump($aposta2);
*/

?>
