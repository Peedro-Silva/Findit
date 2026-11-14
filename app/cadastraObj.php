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
            <!-- ALTERAÇÃO: adicionado alt no logo (acessibilidade) -->
            <a href="./index.php"><img src="imagens/findit-white.png" alt="FindIt"></a>
        </div>

        <!-- ALTERAÇÃO: div.menu trocada por <nav> (semântica); a classe "menu" continua igual -->
        <nav class="menu">
            <a href="perfil.php" class="btn-perfil">
                <img src="imagens/perfil.png" alt="Perfil">
            </a>
            <a href="./sobre.php">Sobre</a>
            <a href="./painelObjetos.php">Objetos guardados</a>
            <a href="./faq.php">Dúvidas</a>
            <a href="./FormContato.php">Contato</a>
            <a href="./CadastrarItem.php" class="btn-cadastrar"><button>+ Cadastrar item</button></a>
        </nav>
    </header>

    <div class="lado-direito">
        <h2>Para realizar o cadastro de um novo objeto são necessárias as seguintes etapas:</h2>

        <!-- ALTERAÇÃO: agora existe UM único <form>, que contém todos os campos E o botão -->
        <form action="" method="POST" class="formulario">
            <div class="cadastro">
                <div class="grupo-campo">
                    <div class="linha-titulo">
                        <p class="ordem">1.</p>
                        <label for="nome">
                            <h3>Nome do objeto:</h3>
                        </label>
                    </div>
                    <!-- ALTERAÇÃO: adicionado name="nome" (sem name o PHP não recebe o valor) -->
                    <input class="resposta" type="text" id="nome" name="nome" required>
                </div>

                <div class="grupo-campo">
                    <div class="linha-titulo">
                        <p class="ordem">2.</p>
                        <label for="descricao">
                            <h3>Descrição do objeto:</h3>
                        </label>
                    </div>
                    <!-- ALTERAÇÃO: adicionado name="descricao" -->
                    <input class="resposta" type="text" id="descricao" name="descricao" required>
                </div>

                <div class="grupo-campo">
                    <div class="linha-titulo">
                        <p class="ordem">3.</p>
                        <label for="local">
                            <h3>Local onde foi perdido ou encontrado:</h3>
                        </label>
                    </div>
                    <!-- ALTERAÇÃO: adicionado name="local" -->
                    <input class="resposta" type="text" id="local" name="local" required>
                </div>

                <div class="grupo-campo">
                    <div class="linha-titulo">
                        <p class="ordem">4.</p>
                        <label for="categoria">
                            <h3>Categoria</h3>
                        </label>
                        <!-- ALTERAÇÃO: select agora é required -->
                        <select name="categoria" id="categoria" required>
                            <!-- ALTERAÇÃO: "Todas" (opção de filtro) trocada por "Selecione...", desabilitada,
                                 para obrigar o usuário a escolher uma categoria -->
                            <option value="" disabled selected>Selecione...</option>
                            <!-- ALTERAÇÃO: values sem acento/espaço, mais seguros para salvar no banco -->
                            <option value="acessorios">Acessórios</option>
                            <option value="bolsas_mochilas">Bolsas e Mochilas</option>
                            <option value="documentos">Documentos</option>
                            <option value="eletronicos">Eletrônicos</option>
                            <option value="roupas">Roupas</option>
                            <!-- ALTERAÇÃO: "Outros" estava com value="roupas"; corrigido para "outros" -->
                            <option value="outros">Outros</option>
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
                        <!-- ALTERAÇÃO: removido o segundo <label for="categoria"> (id duplicado e sem sentido,
                             pois aqui se escolhe o ícone). Texto também corrigido. -->
                        <h3>Selecione o ícone do objeto:</h3>
                    </div>
                </div>
            </div>

            <!--
                ALTERAÇÕES nos emojis:
                - removidos todos os <br> (não fazem efeito útil dentro de flex)
                - value simplificado (apenas o nome), sem entidade HTML quebrada (faltava ";")
                - "required" mantido só no primeiro radio: basta um por grupo
            -->
            <div class="circulos-container">
                <div class="oito">
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="chocolate" required>🍫</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="garrafinha">🥤</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="relogio">⌚</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="guarda_chuva">🌂</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="bola_futebol">⚽</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="patins">🛼</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="video_game">🎮</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="pelucia">🧸</label>
                </div>

                <div class="oito">
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="oculos">👓</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="casaco">🧥</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="bone">🧢</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="bolsa">👜</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="maquiagem">💄</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="anel">💍</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="fone">🎧</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="celular">📱</label>
                </div>

                <div class="oito">
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="computador">💻</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="camera">📷</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="livro">📚</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="agenda">📓</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="cartao">💳</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="caneta">🖊️</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="chave">🔑</label>
                    <label class="circulo"><input type="radio" name="emoji_escolhido" value="martelo">🔨</label>
                </div>
            </div>

            <!-- ALTERAÇÃO: botão movido para DENTRO do formulário principal.
                 Antes ele ficava em um segundo <form> vazio, então nenhum dado era enviado. -->
            <button class="cadastrar" type="submit">Cadastrar</button>
        </form>
        <!-- ALTERAÇÃO: removido o segundo <form class="botao"> -->
    </div>

    <div class="prateleira">
        <img src="imagens/prateleira.jpg" alt="prateleira com objetos guardados">
    </div>
</body>

</html>