<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css">
    <title>Sistema SampaWeb</title>
    <style>
        div {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 20px;
            background-color: #f8f9fa;
        }
        .btn-login {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .btn-login:hover {
            background-color: #0056b3;
        }
        .container {
        display: flex;
        gap: 100px; /* Espaço entre as imagens */
        justify-content: center; /* Centraliza as imagens na tela */
        }

        img {
        max-width: 320px;
        margin-bottom: 15px;
        border-radius: 10px;
        }

    </style>
</head>
<body>

<div class="container">
    <img src="imagens/sampaweb_logo.png" alt="Logo de Login">
</div>
<div>
    <h1>Bem-vindo ao sistema SAMPAWEB <br></h1>
    <p>Clique no botão abaixo para acessar a página de login:</p><br>
    <a href="login.php" class="linkacesso-link">Acessar Login</a><br><br>
</div>
<div class="container">
    <img src="imagens/sampa2024.jpg" alt="Logo de Login">
</div>



</body>
</html>
