<?php
require '../config/config.php';

// Simples roteamento
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_method = $_SERVER['REQUEST_METHOD'];

if ($uri == '/' || $uri == '/home') {
    require '../app/controllers/HomeController.php';
    $controller = new HomeController();
    $controller->index();
} elseif ($uri == '/cadastrar') {
    require '../app/controllers/PessoaController.php';
    $controller = new PessoaController();

    if ($request_method === 'POST') {
        // Captura os dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $controller->cadastrar($nome, $email); // Chama a função de cadastrar
    } else {
        // Se não for um POST, exibe o formulário
        $controller->index(); // Isso irá exibir a view de cadastro
    }
} else {
    echo "Página não encontrada!";
}
