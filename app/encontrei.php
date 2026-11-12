<?php

require_once __DIR__ . "/init.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idObjeto'])) {
    
    // Pega o ID e garante que seja um número inteiro (segurança básica)
    $id = $_POST['idObjeto'];

    // Exemplo de uso:
    echo "O ID do objeto recebido é: " . $id;

    // Aqui você faz a sua lógica, como um UPDATE no banco de dados:
    // $sql = "UPDATE objetos SET status_objeto = 'Encontrado' WHERE id = :id";
    
} else {
    // Caso alguém tente acessar encontrei.php diretamente pela URL sem clicar no botão
    echo "Nenhum objeto selecionado.";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrou objeto</title>
</head>
<body>
    
</body>
</html>