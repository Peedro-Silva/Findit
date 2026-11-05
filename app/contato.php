<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contato</title>
</head>
<body>
   <header>
    <div class="marca">
        <a href="index.php">
            <img class="logo" src="img/logo.png" alt="findIt">
        </a>

        <img class="avatar" src="https://static.vecteezy.com/ti/vetor-gratis/p1/67451161-avatar-padrao-do-utilizador-perfil-icone-social-meios-de-comunicacao-perfil-cenario-plano-simbolo-dentro-preto-cor-volta-forma-isolado-em-transparente-fundo-pessoa-icone-genero-neutro-sinal-ilustracao-vetor.jpg" alt="Perfil">
    </div>

    <nav>
        <a class="link" href="sobre.php">Sobre</a>
        <a class="link" href="objetos.php">Objetos guardados</a>
        <a class="link" href="duvidas.php">Dúvidas</a>
        <a class="link" href="contato.php">Contato</a>
    </nav>

    <a class="botaoCadastro" href="cadastro.php">⊕ Cadastrar Item</a>
</header>

    <main>
        <h1 class="titulo">Contato</h1>
        <h2 class="subtitulo">Algum problema ou dúvida, entre em contato com nosso suporte</h2>

        <div class="conteudo">

            <!-- COLUNA ESQUERDA: formulário -->
            <form action="processaContato.php" method="post">

                <div class="campo">
                    <div class="subcampos">
                        <label for="telefone">Telefone:</label>
                        <input class="campoForm" type="tel" name="telefone" id="telefone"
                               placeholder="exemplo: (11) 12345-6789" required>
                    </div>

                    <div class="subcampos">
                        <label for="Nome">Nome:</label>
                        <input class="campoForm" type="text" name="Nome" id="Nome"
                               placeholder="exemplo: Maria José" required>
                    </div>

                    <div class="subcampos">
                        <label for="email">Email:</label>
                        <input class="campoForm" type="email" name="email" id="email"
                               placeholder="exemplo: emailcliente@gmail.com" required>
                    </div>
                </div>

                <div class="campoCheckbox">
                    <h3 class="rotulo">Assunto</h3>

                    <label><input type="checkbox" name="suporte" id="suporte"> Suporte</label>
                    <label><input type="checkbox" name="sugestao" id="sugestao"> Sugestão</label>
                    <label><input type="checkbox" name="reclamacao" id="reclamacao"> Reclamação</label>
                </div>

                <h3 class="rotulo">Mensagem:</h3>

                <div class="campoMensagem">
                    <textarea class="mensagem" name="mensagem" id="mensagem" rows="5"
                              placeholder="Insira a sua mensagem aqui" required></textarea>

                    <button type="submit">Enviar</button>
                </div>
            </form>

            <!-- COLUNA DIREITA: card de contato -->
            <aside class="cardContato">
                <h3>Nosso contato:</h3>
                <p><span class="destaque">Email:</span> findit@gmail.com</p>
                <p><span class="destaque">Telefone:</span> (11) 12345-6789</p>

                <h3>Atendimento:</h3>
                <p>Segunda - Sexta feira: 08:00 às 20:00</p>
                <p>Sábados: 10:00 às 18:00</p>
                <p>Domingos: 10:00 às 16:00</p>
            </aside>

        </div>
    </main>
</body>
</html>