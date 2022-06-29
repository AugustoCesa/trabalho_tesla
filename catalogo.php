<?php
include "head.php";
?>

<style>
    .container {
        margin-top: 180px;
    }

    .catalogo img {
        border: solid 2px red;

    }


    .linha1 {
        display: flex;
        flex-direction: row;
        padding-right: 5px;
        justify-content: center;
        align-items: center;
    }


    .linha2 {
        display: flex;
        flex-direction: row;
        padding-right: 5px;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
    }

    h1 {
        font-size: 40px;
        font-family: 'Bebas Neue';
        text-align: center;
    }

    #btn {
        padding-right: 15px;
        width: 70px;
        background-color: red;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 5px;
        
    }
</style>


<div class="container">

    <h1>catálogo</h1>

    <div class="catalogo">

        <div class="linha1">
            <img src="assets/images/modelY.png" alt="Model Y" width="320" height="250">
            <div>
           <a href="https://www.tesla.com/modely">     <button class="buttom" type="submit" id="btn">Site oficial</button> </a>
            </div>

            <img src="assets/images/model3.png" alt="Model3" width="350" height="250">
            <div>
          <a href="https://www.tesla.com/model3">      <button class="buttom" type="submit" id="btn">Site oficial</button> </a>
            </div>

        </div>


        <div class="linha2">
            <img src="assets/images/modelX.png" alt="modelX" width="350" height="250">
            <div>
          <a href="https://www.tesla.com/modelx">      <button class="buttom" type="submit" id="btn">Site oficial</button> </a>
            </div>

            <img src="assets/images/modelS.png" alt="modelS" width="350" height="250">
            <div>
         <a href="https://www.tesla.com/models">       <button class="buttom" type="submit" id="btn">Site oficial</button> </a>
            </div>

        </div>


    </div>


</div>



<?php

include "footer.php"

?>