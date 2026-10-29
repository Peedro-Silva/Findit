<?php
// require_once __DIR__ . "/Findit/app/init.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | findIt</title>
    <link rel="stylesheet" href="/Findit/app/login.css">
</head>

<body>
    <header>
        <div id="logo">
            <img src="/logo.png" alt="Logo findIt">
        </div>
    </header>

    <main>
        <div class="displayFlex">
            <div class="left-side">
                <div class="container-sup">
                    <div id="bemvindo">
                        <h1>Que bom ter você de volta.</h1>
                    </div>
                    <br>
                    <div id="msg">
                        <p>Entre para acompanhar seus anúncios e reencontrar o que importa.</p>
                    </div>
                </div>

                <div class="container-mid">
                    <div class="form">
                        <form action="processaLog.php" method="post">
                            <div id="email">
                                <label for="email">E-mail corporativo ou pessoal</label><br>
                                <input type="email" id="email" placeholder="seuemail@exemplo.com" required>
                            </div>

                            <div id="senha">
                                <label for="senha">Senha</label><br>
                                <input type="password" name="senha" id="senha" placeholder="Digite sua Senha" required>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="container-low">
                    <div id="botao">
                        <button type="submit" id="botao" name="botao">Entrar na Minha Conta</button>
                    </div>
                    <div class="criarConta">
                        <p>Ainda não faz parte?</p>
                        <a href="cadastrarConta.php">Crie sua conta grátis</a>
                    </div>
                </div>
            </div>


            <div class="right-side">
                <div id="h3">
                    <h3>PERDEU? A GENTE ENCONTRA.</h3>
                </div>
                <div id="h1">
                    <h1>Tudo pode voltar para você.</h1>
                </div>
                <div id="p1">
                    <P>Uma comunidade inteira conectando pessoas aos </P><br>
                </div>
                <div id="p2">
                    <p>objetos que importam.</p>
                </div>
                <div class="img">
                    <div id="mala">
                        <img src="/malaAzul.jpg" alt="Mala Azul">
                    </div>
                    <div id="mochila">
                        <img src="/mochila vermelha.jpg" alt="Mochila Vermelha">
                    </div>
                </div>
            </div>
        </div>


    </main>

    <footer>
        <p>&copy; 2026 findIt. Todos os direitos reservados.</p>
    </footer>
</body>

</html>