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
    .body {
        margin: 0;
        border: 0;

    }

    .conteudo {
        margin-top: 200px;
        font-family: 'Bebas Neue';

    }

    .titulo {
        font-size: 40px;
        text-align: center;
    }

    .imagemsolar img {
        border: solid 4px red;
        border-radius: 20px;
    
    }

    .teto {
        margin-top: 100px;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .teto p {
        font-size: 24px;
        margin-left: 100px;
        margin-right: 100px;
    }

    .teto h2 {
        font-size: 34px;
    }


    .carros {
        margin-top: 100px;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .carros h1 {
        font-size: 34px;
    }

    
    .carros p {
        font-size: 24px;
        margin-left: 100px;
        margin-right: 100px;
    }

    .models img{
        border: solid red 4px;
        border-radius: 20px;
    }
</style>

<body>

    <div class="conteudo">

        <div class="titulo">
            <h1>Serviços</h1>
        </div>


        <div class="teto">

            <h2>Solar Roofs</h2>
            <div class="imagemsolar">
               <a href="https://www.tesla.com/solarroof" ><img src="assets/images/teto.jpg" alt="teto solar" width="700" height="500"></a>
            </div>

            <p>Para criar um ecossistema completo de energia sustentável, a Tesla
                concebeu também um conjunto exclusivo de soluções de energia, a Powerwall,
                a Powerpack e o Solar Roof, permitindo que os proprietário de habitações, as
                empresas e os serviços façam a gestão da produção, do armazenamento e do consumo
                de energia renovável.</p>

        </div>



        <div class="carros">
            <h1>Models</h1>


            <div class="models">
               <a href="https://www.tesla.com/"> <img src="assets/images/modelstesla.jpg" alt=""  width="700" height="400"></a>
            </div>

            <p>Os Models são a linha de carro revolucionaria da Tesla</p>
            <p>Juntando tecnologia com velocidade!</p>

        </div>


    </div>

</body>

</html>






<?php
include "footer.php"
?>