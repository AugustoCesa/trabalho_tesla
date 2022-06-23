<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <style>
        footer {
            display: inline;
            font-family: 'Bebas Neue', 'Franklin Gothic Medium';
            justify-content: flex-end;
            color: white;
        }

        .corfoot h1 {
            background-color: red;
        }

        .corfoot {
            background-color: black;
            width: 100%;
            height: 200px;
            display: flex;
        }

        .imagem {
            display: flex;
            justify-content: center;
            padding-right: 20px;
            align-items: center;
            padding-left: 100px;
         

        }
        .titulofoot{
            background-color: red;
        }

        .corfoot ul {
display: flex;
list-style: none;
font-size: 20px;
align-items: center;
flex-direction: column;
justify-content: center;
align-items: flex-start;
justify-content: space-evenly


        }
    </style>

</head>

<body>
    <footer>
        <div class="titulofoot">
            <h1>Siga nos nas redes sociais</h1>
        </div>
        <div class="corfoot">

            <div class="imagem">
                <img src="assets/images/whatsapp-logo-1.png" alt="vap vap" width="100">
                <img src="assets/images/insta.png" alt="" width="100">
                <img src="assets/images/twitter.png" alt="" width="100">
            </div>

            <ul>
                <li><a href="suporte.php">Suporte</a></li>
                <li><a href="catalogo.php">Catálogo</a></li>
                <li><a href="sobrenos.php"> Sobre nós</a></li>
                <li><a href="serviços.php">Serviços</a></li>
            </ul>

        </div>
    </footer>
</body>

</html>