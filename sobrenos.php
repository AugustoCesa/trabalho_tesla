<?php
include "head.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        font-family: 'Bebas Neue';
    }

    .texto {
        margin-top: 200px
    }

    .texto p {
        font-size: 24px;
        margin-left: 400px;
        margin-right: 400px;
    }


    .titulo {
        font-size: 40px;
        text-align: center;
    }

    .texto img {
        margin-left: 500px;
        border: solid red 4px;
        border-radius: 20px;
    }

    .texto span{
        display: flex;
        justify-content: center;
        font-size: 18px;
    }
</style>


<body>

    <div class="texto">

        <div class="titulo">
            <h1>tesla</h1>
        </div>


        <p>
            A Tesla teve sua origem em 2003, em São Franscisco, Califórnia, quando um grupo de engenheiros visionários, incluindo o renomado empresário Elon Musk, se reuniram para mostrarem ao mundo que era possível projetar e fabricar veículos totalmente elétricos.

            Apesar a atuação principal da empresa esteja direcionada na fabricação e distribuição de automóveis eletétricos, com a Tesla Motors, a companhia também atua em projetos de sustentabilidade envolvendo armazenamento de energia e a confecção de painéis solares, bem como na comercialização de componentes elétricos como baterias industriais de lítio-íon.

            Os principais linhas de veículos da Tesla são o Roadster (esportivo), Model S (sedan esportivo), Tesla Model X (SUV), Tesla Model 3 (modelo acessível da companhia). Em 2017, a empresa também apresentou o seu primeiro caminhão elétrico, chamado de Semi.

            Os principais objetivos da Tesla são os de ampliar e melhorar os métodos de geração e armazenamento de energia existentes e oferecer cada vez mais produtos e veículos de alta performance que viabilizem a produção de energia limpa.
        </p>


        <img src="assets/images/elon.png" alt="">
        <span>Elon Musk</span>



    </div>


    <?php
    include 'footer.php'
    ?>
</body>

</html>