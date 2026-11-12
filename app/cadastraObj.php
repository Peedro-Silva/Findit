<?php

require_once __DIR__ . "/init.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Item</title>
    <link rel="stylesheet" href="css/cadastraObj.css">
</head>

<body>

    <!-- menu -->
    <header>
        <div class="logo">
            <img src="imagens/findit.png" alt="Findit">
        </div>

        <div class="menu">
            <a href="perfil.php" class="btn-perfil">
                <img src="imagens/perfil.png" alt="Perfil">
            </a>
            <a href="sobre.php">Sobre</a>
            <a href="objetos.php">Objetos guardados</a>
            <a href="faq.php">Dúvidas</a>
            <a href="FormContato.php">Contato</a>
            <a href="CadastrarItem.php" class="btn-cadastrar">+ Cadastrar item</a>
        </div>
    </header>

    <div class="lado-esquerdo">
        <h3>Para realizar o cadastro de um novo objeto são necessárias as seguintes etapas:</h3>

        <form action="" method="POST" class="formulario">
            <div class="cadastro">
                <div class="grupo-campo">
                    <div class="linha-titulo">
                        <p class="ordem">1.</p>
                        <label for="nome">
                            <p>Nome do objeto:</p>
                        </label>
                    </div>
                    <input class="resposta" type="text" id="nome" name="nome" required>
                </div>

                <div class="grupo-campo">
                    <div class="linha-titulo">
                        <p class="ordem">2.</p>
                        <label for="descricao">
                            <p>Descrição do objeto:</p>
                        </label>
                    </div>
                    <input class="resposta" type="text" id="descricao" name="descricao" required>
                </div>

                <div class="grupo-campo">
                    <div class="linha-titulo">
                        <p class="ordem">3.</p>
                        <label for="local">
                            <p>Local onde foi perdido ou encontrado:</p>
                        </label>
                    </div>
                    <input class="resposta" type="text" id="local" name="local" required>
                </div>

                <div class="grupo-campo">
                    <div class="linha-titulo">
                        <p class="ordem">4.</p>
                        <label for="categoria">
                            <p>Categoria</p>
                        </label>
                        <select name="categoria" id="categoria">
                            <option value="">Todas</option>
                            <option value="acessórios">Acessórios</option>
                            <option value="bolsas e mochilas">Bolsas e Mochilas</option>
                            <option value="documentos">Documentos</option>
                            <option value="eletrônicos">Eletrônicos</option>
                            <option value="roupas">Roupas</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>
                </div>

                <div class="grupo-campo">
                    <div class="linha-titulo">
                        <p class="ordem">5.</p>
                        <label for="status">
                            <p>Status atual:</p>
                        </label>
                        <select name="status" id="status">
                            <option value="perdido">Perdido</option>
                            <option value="encontrado">Encontrado</option>
                        </select>
                    </div>
                </div>

                <div class="grupo-campo">
                    <div class="linha-titulo">
                        <p class="ordem">6.</p>
                        <p>Selecione a categoria a qual o objeto pertence:</p>
                    </div>
                </div>
            </div>

            <div class="circulos-container">
                <div class="oito">
                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="chocolate: &#x1f36b;" required>
                        🍫
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="garrafinha: &#x1f964;" required>
                        🥤
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="relogio: &#x231a;" required>
                        ⌚
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="guarda_chuva: &#x1f302;" required>
                        🌂
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="bola_futebol: &#x26bd;" required>
                        ⚽
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="equipamento: &#x1F6FC;" required>
                        🛼
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="video_game: &#x1f3ae;" required>
                        🎮
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="pelucia: &#x1f9f8;" required>
                        🧸
                    </label>
                </div>

                <div class="oito">
                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="oculos: &#x1f453;" required>
                        👓
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="casaco: &#x1f9e5;" required>
                        🧥
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="bone: &#x1f9e2;" required>
                        🧢
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="bolsa: &#x1f45c;" required>
                        👜
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="maquiagem: &#x1f484;" required>
                        💄
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="anel: &#x1f48d;" required>
                        💍
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="fone: &#x1f3a7;" required>
                        🎧
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="celular: &#x1f4f1;" required>
                        📱
                    </label>
                </div>

                <div class="oito">
                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="computador: &#x1f4bb;" required>
                        💻
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="camera: &#x1f4f7;" required>
                        📷
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="livro: &#x1f4da;" required>
                        📚
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="agenda: &#x1f4d3;" required>
                        📓
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="cartao: &#x1f4b3;" required>
                        💳
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="caneta: &#x1F58A;" required>
                        🖊️
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="chave: &#x1f511;" required>
                        🔑
                    </label>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="martelo: &#x1f528;" required>
                        🔨
                    </label>
                </div>
            </div>

            <div class="botao">
                <button class="cadastrar" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>

    <div class="prateleira">
        <img src="imagens/prateleira.jpg" alt="prateleira com objetos guardados">
    </div>
</body>

</html>