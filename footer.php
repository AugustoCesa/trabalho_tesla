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
            flex-direction: column;
            align-content: stretch;
            justify-content: flex-start;
            align-items: stretch;
        }


        .imagem {
            display: flex;
            justify-content: center;
            padding-right: 20px;
            align-items: center;
            padding-left: 100px;
            margin-top: 5px;

        }

        .titulofoot {
            background-color: red;
            display: flex;
            
        }

        .titulofoot h1{
            margin-left: 10px;
        }

        .corfoot ul {
            list-style: none;
            display: flex;
            list-style: none;
            font-size: 26px;
            justify-content: space-evenly;
            align-content: center;
            
        }

        .corfoot li, a{
            text-decoration: none;
            color: white;
        }

        
    
    </style>

</head>

<body>
    <div class="posicao">
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
    </div>
</body>

</html>