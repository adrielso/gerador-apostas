<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Gerador de Jogos</title>
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">Gerador de Jogos</h1>
            <nav>
                <a href="index.php?pg=principal">Principal</a>
                <a href="index.php?pg=mega">Mega-Sena</a>
                <a href="">Quina</a>
                <a href="">Lotofácil</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
<?php
if (isset($_GET['pg'])){
    switch($_GET['pg']) {
        
        case "mega":
            include "inc/mega.php";
            break;

        case "loto":
            include "inc/mega.php";
            break;

        case "salvar":
            include "inc/salvar.php";
            break;

        default:
            echo "Olá Mundo!";
            break;
    }
}
?>
        </div>

    </main>
    
</body>
</html>