<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="../ressources/css/style.css">
</head>
<body>
    <?php
    $saque=$_REQUEST['valor'];

    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>Caixa Eletrônico</h1>
            <label for="valor">Qual o valor deseja sacar?(R$)</label>
            <input type="number" name="valor" id="valor" step="2" required value="<?=$saque?>">
            <input type="submit" value="Sacar">
            <p>Notas disponíveis: R$100, R$50, R$20, R$10, R$5 e R$2 </p>
        </form>
    </main>
    <?php
        $resto=$saque;       
        $tot100=floor($resto/100);
        $resto%=100;
        $tot50=floor($resto/50);
        $resto%=50;
        $tot20=floor($resto/20);
        $resto%=20;
        $tot10=floor($resto/10);
        $resto%=10;
        $tot5=floor($resto/5);
        $resto%=5;
        $tot2=floor($resto/2);
        $resto%=2;
        // floor arredonda para baixo
        //% usa o resto da divisão, o que vai além numa divisão inteira 
    ?>
    <section>
        <h1>Saque de <?=number_format($saque, 2, ",", ".")?> reais realizado</h1> 
        <p>O caixa eletroônico vai te entregar as seguintes notas:
            <ul>
                <li><img src="../public/img/100reais.jpg" alt="" srcset="Nota de 100 reais">x<?=$tot100?></li>
                <li><img src="../public/img/50reais.jpg" alt="Nota de 50 reais">x<?=$tot50?></li>
                <li><img src="../public/img/20reais.jpg" alt="Nota de 20 reais">x<?=$tot20?></li>
                <li><img src="../public/img/10reais.jpg" alt="Nota de 10 reais">x<?=$tot10?></li>
                <li><img src="../public/img/5reais.jpg" alt="Nota de 5 reais">x<?=$tot5?></li>
                <li><img src="../public/img/2reais.jpeg" alt="Nota de 02 reais">x<?=$tot2?></li>
            </ul>
        </p>

    </section>
    
</body>
</html>