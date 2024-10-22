<?php
require '../config/config.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_method = $_SERVER['REQUEST_METHOD'];

if ($uri == '/' || $uri == '/home') {
    require '../app/controllers/HomeController.php';
    $controller = new HomeController();
    $controller->index();

} elseif ($uri == '/sorteio' && $request_method === 'POST') {
    require '../app/controllers/SorteioController.php';
    $controller = new SorteioController();
    $controller->realizarSorteio();
    
} elseif ($uri == '/cadastrar') {
    require '../app/controllers/PessoaController.php';
    $controller = new PessoaController();

    if ($request_method === 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $controller->cadastrar($nome, $email);
    } else {
        $controller->index();
    }
    
} elseif ($uri == '/editar' && $request_method === 'GET') {
    require '../app/controllers/PessoaController.php';
    $controller = new PessoaController();

    $id = $_GET['id'];
    $controller->editar($id);

} elseif ($uri == '/deletar' && $request_method === 'GET') {
    require '../app/controllers/PessoaController.php';
    $controller = new PessoaController();

    $id = $_GET['id'];
    $controller->deletar($id);
} else {
    echo "Página não encontrada!";
}
