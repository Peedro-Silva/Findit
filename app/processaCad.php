<?php

declare(strict_types=1);

require_once __DIR__ . '/init.php';
require_once __DIR__ . '/crud.php';


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: cadastrarConta.php');
    exit;
}

$nome  = trim($_POST['nome'] ?? '');
$tel   = trim($_POST['tel'] ?? '');
$email = trim($_POST['email'] ?? '');
$senha = $_POST['senha'] ?? '';

$erros = [];