<?php
include "head.php";
?>

<style>
    .titulo {
        text-align: center;
        font-size: 45px;
        font-family: 'Bebas Neue', 'Franklin Gothic Medium';
        margin-top: 200px;

    }

    .titulo h1 {
        border: solid 5px red;
        border-radius: 30px;
    }


    .imageminicial {
        display: flex;
        justify-content: center;
    }

    .imageminicial img {
        border: solid 4px red;
        border-radius: 20px;
        width: 700px;
    }

    .texto{
        font-size: 35px;
        margin-top: 90px;
        text-align: center;
        font-family: 'Bebas Neue', 'Franklin Gothic Medium'; ;
    }

    
</style>

<div class="container">

    <div class="titulo">
        <h1>Tesla</h1>
    </div>


    <div class="imageminicial">
        <img src="assets/images/modelstesla.jpg" alt="Tesla">
    </div>


    <div class="texto">
        <P>Um mundo novo! <br>
            junto da <strong>Tesla</strong></P>
    </div>




</div>






<?php
include "footer.php";
?>