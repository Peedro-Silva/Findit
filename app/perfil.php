<?php

require_once __DIR__ . "/init.php";

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/perfil.css">
</head>
<body>
       <header>
        <div class="logo">
            <img src="imagens/logo.png">
        </div>
        
        <div class="menu">
                <a href="perfil.php"><img src="imagens/perfil.png"></a>
                <a href="sobre.php">Sobre</a>
                <a href=".html">Objetos guardados</a>
                <a href="faq.php">Dúvidas</a>
                <a href="contato.html">Contato</a>
                <button class="cadastraObj.php">+ Cadastrar item</button>
        </div>
    </header>
     <br>
     <br>
     <br>
    <div class="container">

    <img src="imagens/perfil.png">

    <div class="lista-textos">
        <h2>Nome de Usuário</h2>
        <h3>Telefone</h3>
        <h3>Email</h3>
        <h3>Tema</h3>
        <h3>Endereço</h3>
        <h3>Forma de Pagamento</h3>
    </div>
</div>
</body>
</html>