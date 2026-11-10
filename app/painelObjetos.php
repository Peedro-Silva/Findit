<?php

require_once __DIR__ . "/init.php";

$pesquisa  = trim($_GET['pesquisa'] ?? '');
$categoria = $_GET['categoria'] ?? '';

$condicoes = [];
$params    = [];

if ($pesquisa !== '') {
    $condicoes[] = '(nome LIKE ? OR descricao LIKE ?)';
    $params[]    = "%{$pesquisa}%";
    $params[]    = "%{$pesquisa}%";
}

if ($categoria !== '') {
    $condicoes[] = 'categoria = ?';
    $params[]    = $categoria;
}

$where   = $condicoes ? implode(' AND ', $condicoes) : null;
$objetos = readAll($pdo, 'objetos', $where, $params);

?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel Objetos</title>


    <link rel="stylesheet" href="./css/style-painelObjetos.css">
</head>

<header>
    <div class="logo">
        <img src="imagens/logo.png">
    </div>

    <div class="menu">
        <a href="perfil.html" class="btn-perfil">
            <img src="imagens/perfil.png" alt="Perfil">
        </a>
        <a href="sobre.html">Sobre</a>
        <a href=".html">Objetos guardados</a>
        <a href="faq.html">Dúvidas</a>
        <a href="contato.html">Contato</a>
        <a href="CadastrarItem.html" class="btn-cadastrar"><button>+ Cadastrar item</button></a>
    </div>
</header>

<body>
    <div class="fundo">

        <div class="busca">
            <form action="" method="get">
                <div>
                    <label for="pesquisa">Qual é o objeto perdido?</label>
                    <input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquise aqui..."
                        value="<?= htmlspecialchars($pesquisa) ?>">

                    <label for="categoria">Categoria</label>
                    <select name="categoria" id="categoria">
                        <option value="">Todas</option>
                        <option value="acessórios">Acessórios</option>
                        <option value="bolsas e mochilas">Bolsas e Mochilas</option>
                        <option value="documentos">Documentos</option>
                        <option value="eletrônicos">Eletrônicos</option>
                        <option value="roupas">Roupas</option>
                        <option value="roupas">Outros</option>
                    </select>
                </div>

                <div>
                    <button type="submit">Buscar</button>
                </div>
            </form>
        </div>

        <div class="telaObjetos">
            <?php if (!$objetos): ?>
                <p>Não encontramos nenhum objeto</p>
            <?php endif; ?>

            <?php foreach ($objetos as $o): ?>
                <?php if ($o['status_objeto'] == 'Perdido'): ?>

                    <div class="objeto">
                        <div class="emoji">
                            <p><?= htmlspecialchars($o['imagemObjeto']) ?></p>
                        </div>
                        <div class="conteudo">
                            <p>Nome: <?= htmlspecialchars($o['nome']) ?></p>
                            <p>Descrição: <?= htmlspecialchars($o['descricao']) ?></p>
                            <p>Status: <?= htmlspecialchars($o['status_objeto']) ?></p>
                            <p>Categoria: <?= htmlspecialchars($o['categoria']) ?></p>
                            <div class="botao">

                                <form method="post" action="encontrei.php">
                                    <input type="hidden" name="id" value="<?= $o['id'] ?>">
                                    <button type="submit">Achei este objeto</button>
                                </form>

                                <?php
                                $texto = "Objeto perdido: {$o['nome']} - {$o['descricao']}. Viu por aí? Acesse o Findit!";
                                $link  = 'https://wa.me/?text=' . urlencode($texto);
                                ?>
                                <a href="<?= htmlspecialchars($link) ?>" target="_blank" rel="noopener">Compartilhar</a>
                            </div>
                        </div>

                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>


    </div>
</body>