<?php

require_once __DIR__ . "/init.php";

$objetos = readAll($pdo, 'objetos');

$pesquisa  = trim($_GET['pesquisa']  ?? '');

?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto Integrador</title>

    <link rel="stylesheet" href="./css/style-index.css">
</head>

<body>
    <div class="busca">
        <h2>Busca</h2>
        <form action="" method="get">
            <label for="pesquisa">O que você procura?</label>
            <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise aqui...">

            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" >
                <option value="nada"></option>
                <option value="acessorios">Acessórios</option>
                <option value="bolsas-e-mochilas">Bolsas e Mochilas</option>
                <option value="documentos">Documentos</option>
                <option value="eletronicos">Eletrônicos</option>
                <option value="Roupas">Roupas</option>
            </select>
            <button type="submit">Buscar</button>
        </form>
    </div>
    <br><br><br>
    <div class="telaObjetos">
        <?php foreach ($objetos as $o): ?>
            <div class="objeto">
                <p>Nome: <?= $o['nome'] ?></p>
                <p>Descrição: <?= $o['descricao'] ?></p>
                <p>Status: <?= $o['status_objeto'] ?></p>
            </div>
        <?php endforeach; ?>

    </div>
</body>

</html>