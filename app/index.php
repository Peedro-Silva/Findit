<?php

require_once __DIR__ . "/init.php";

$objetos = readAll($pdo, 'objetos');

$i = 0;
$cont = 0;

foreach ($objetos as $o) {
    $i++;
    if ($o['status_objeto'] == 'Encontrado') {
        $cont++;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindIt</title>
</head>
<body>
    <main>
        <div class="topo">
            <h1>O seu rastreador de TODOS os objetos! (sim, todos)</h1>
        </div>

        <a href="./login.php">Criar Conta</a>

        <p>Como funciona?</p>
        <div class="passos">
            <div class="quadro">
                <h2>1. Cadastro</h2>
                <p>Você cria uma conta gratuita em nosso sistema e cadastre o objeto perdido (tanto que vc perdeu ou achou)</p>
            </div>
            <div class="quadro">
                <h2>2. Busca</h2>
                <p>A partir daí o seu objeto estará cadastrado no nosso sistema, aparecerá no nosso Painel de Objetos e se achado irá para analise</p>
            </div>
            <div class="quadro">
                <h2>3. Entrega</h2>
                <p>Veremos se o objeto é seu, e se for, enviaremos para o nosso stand mais próximo de você e te entregaremos bonitinho para você</p>
            </div>
        </div>

        <div class="dados">
            <p>Já são <?= $i ?> objetos cadastrados</p>
            <p><?= $cont ?> objetos encontados</p>
        </div>

        <div class="avaliacoes">
            <div class="bloco">
                <p>Juliana Pires</p>
                <p>⭐⭐⭐⭐⭐</p>
                <p>Esqueci meu Notebook na mesa do escritório. Uma menina achou, postou, e em 10 minutos a gente já estava indo busca. Salvou demais!</p>
            </div>

            <div class="bloco">
                <p>João Clóvis</p>
                <p>⭐⭐⭐⭐⭐</p>
                <p>Sempre que o pessoal deixa chaves, capacetes ou guarda-chuvas jogados nos corredores, eu cadestro no sistema pra galera achar rápido. Ficou muito mais organizado do que aquela caixa de papelão no balcão.</p>
            </div>

            <div class="bloco">
                <p>José Britto</p>
                <p>⭐⭐⭐⭐⭐</p>
                <p>Esqueci meu Notebook na mesa do escritório. Uma menina achou, postou, e em 10 minutos a gente já estava indo busca. Salvou demais!</p>
            </div>

            <div class="bloco">
                <p>Vincenzo</p>
                <p>⭐⭐⭐⭐⭐</p>
                <p>Faço caminhada na pista do campus de manhã e achei um molho de chaves de carro perto do portão. Um menino da faculdade me ajudou a publicar no site e no mesmo dia o dono apareceu. Fiquei muito feliz em ajudar!</p>
            </div>

            <div class="bloco">
                <p>Paulo César</p>
                <p>⭐⭐⭐⭐⭐</p>
                <p>Perdi minha joelheira no ginásio depois do treino. Como a busca por palavra-chave funciona certinho, só digitei 'joelheira' e lá estava o aviso. Ferramenta indispensável!</p>
            </div>

            <div class="bloco">
                <p>Júlio Junior</p>
                <p>⭐⭐⭐⭐⭐</p>
                <p>Achei um fone sem fio no banco perto da biblioteca. Cliquei no botão 'Encontrei!' no card e compartilhei direto no grupo da minha sala no Zap. O dono me chamou na hora. O sistema funciona de verdade.</p>
            </div>

            <div class="bloco">
                <p>Daniel Oliveira</p>
                <p>⭐⭐⭐⭐⭐</p>
                <p>Chego correndo do trabalho pra aula e acabei deixando meu Bilhete Único com a carteira de estudante no pátio. Achei no dia seguinte pesquisando na categoria 'Documentos'. Muito simples de mexer.</p>
            </div>
        </div>
    </main>

    <footer class="rodape">
        <div class="rodape-conteudo">

            <div class="rodape-coluna">
                <h3>FINDIT</h3>
                <p>Sistema de achados e perdidos. Devolvendo pertences de forma rápida e simples.</p>
            </div>
        </div>

        <!-- Barra Inferior de Direitos Reservados -->
        <div class="rodape-direitos">
            <p>&copy; 2026 FINDIT. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>