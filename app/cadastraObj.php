<?php

require_once __DIR__ . "/init.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Item</title>
    <link rel="stylesheet" href="./css/cadastraObj.css">
</head>

<body>

    <!-- menu -->
    <header>
        <div class="logo">
            <img src="imagens/findit.png">
        </div>

        <div class="menu">
            <a href="perfil.php" class="btn-perfil">
                <img src="imagens/perfil.png" alt="Perfil">
            </a>
            <a href="sobre.html">Sobre</a>
            <a href=".html">Objetos guardados</a>
            <a href="faq.html">Dúvidas</a>
            <a href="contato.html">Contato</a>
            <a href="CadastrarItem.html" class="btn-cadastrar"><button>+ Cadastrar item</button></a>
        </div>
    </header>

    <div class="lado-direito">
        <h2>Para realizar o cadastro de um novo objeto são necessárias as seguintes etapas:</h2>


        <form action="" method="POST" class="formulario">
            <div class="cadastro">
                <div class="grupo-campo">
                    <div class="linha-titulo">
                        <p class="ordem">1.</p>
                        <label for="nome">
                            <h3>Nome do objeto:</h3>
                        </label>
                    </div>
                    <input class="resposta" type="text" id="nome" required>
                </div>

                <div class="grupo-campo">
                    <div class="linha-titulo">
                        <p class="ordem">2.</p>
                        <label for="descricao">
                            <h3>Descrição do objeto:</h3>
                        </label>
                    </div>
                    <input class="resposta" type="text" id="descricao" required>
                </div>

                <div class="grupo-campo">
                    <div class="linha-titulo">
                        <p class="ordem">3.</p>
                        <label for="local">
                            <h3>Local onde foi perdido ou encontrado:</h3>
                        </label>
                    </div>
                    <input class="resposta" type="text" id="local" required>
                </div>

                <div class="grupo-campo">
                    <div class="linha-titulo">
                        <p class="ordem">4.</p>
                        <label for="categoria">
                            <h3>Categoria</h3>
                        </label>
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
                </div>

                <div class="grupo-campo">
                    <div class="linha-titulo">
                        <p class="ordem">5.</p>
                        <label for="status">
                            <h3>Status atual:</h3>
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
                        <label for="categoria">
                            <h3>Selecione a categoria a qual o objeto pertence:</h3>
                        </label>
                    </div>
                </div>
            </div>

            <div class="circulos-container">
                <div class="oito">
                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="chocolate: &#x1f36b" required>
                        🍫
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="garrafinha: &#x1f964" required>
                        🥤
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="relogio: &#x231a" required>
                        ⌚
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="guarda_chuva: &#x1f302" required>
                        🌂
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="bola_futebol: &#x26bd" required>
                        ⚽
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="equipamento: &#x1F6FC" required>
                        🛼
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="video_game: &#x1f3ae" required>
                        🎮
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="pelucia: &#x1f9f8" required>
                        🧸
                    </label>
                    <br>
                </div>

                <div class="oito">
                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="oculos: &#x1f453" required>
                        👓
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="casaco: &#x1f9e5" required>
                        🧥
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="bone: &#x1f9e2" required>
                        🧢
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="bolsa: &#x1f45c" required>
                        👜
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="maquiagem: &#x1f484" required>
                        💄
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="anel: &#x1f48d" required>
                        💍
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="fone: &#x1f3a7" required>
                        🎧
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="celular: &#x1f4f1" required>
                        📱
                    </label>
                    <br>
                </div>

                <div class="oito">
                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="computador: &#x1f4bb" required>
                        💻
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="camera: &#x1f4f7" required>
                        📷
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="livro: &#x1f4d" required>
                        📚
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="agenda: &#x1f4d3" required>
                        📓
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="cartao: &#x1f4b3" required>
                        💳
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="caneta: &#x1F58A" required>
                        🖊️
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="chave: &#x1f511" required>
                        🔑
                    </label>
                    <br>

                    <label class="circulo">
                        <input type="radio" name="emoji_escolhido" value="martelo: &#x1f528" required>
                        🔨
                    </label>
                    <br>
                </div>

            </div>
        </form>

        <form action="" class="botao">
            <button class="cadastrar" type="submit">Cadastrar</button>
        </form>
    </div>

    <div class="prateleira">
        <img src="imagens/prateleira.jpg" alt="prateleira com objetos guardados">
    </div>
</body>

</html>