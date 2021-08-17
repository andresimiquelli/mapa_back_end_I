<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caramelo - Doces Artesanais</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Bitter', serif;
        }

        header {
            height: 100px;
            background-color: #DD6A00;
            text-align: center;
            padding: 10px;
        }

        .logo {
           height: 80px; 
        }

        nav {
            background-color: #FFAD93;
        }

        nav ul {
            list-style: none;
            width: 100%;
            margin: 0px;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            padding-top: 12px;
            padding-bottom: 12px;
            padding-left: 25px;
            padding-right: 25px;
        }

        .content{
            min-height: 400px;
        }

        footer{
            background-color: #FFAD93;
            min-height: 60px;
            padding: 40px;
        }

        .container{
            max-width: 800px;
            display: flex;
            margin: auto;
            padding-top: 30px;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <header>
        <img src="images/logo_white.png" alt="Logo" class="logo">
    </header>
    <nav>
        <ul>
            <li>Home</li>
            <li>Quem somos</li>
            <li>Contato</li>
            <li>Localização</li>
        </ul>
    </nav>
    <div class="content">
        <div class="container">
            <?php
                include('pages/home.php');
            ?>
        </div>
    </div>
    <footer>
        Dados acadêmicos
    </footer>
</body>
</html>