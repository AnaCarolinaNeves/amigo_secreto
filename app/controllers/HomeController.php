<?php
require '../app/models/PessoaModel.php'; // Importando o modelo

class HomeController {
    private $pessoaModel;

    public function __construct() {
        $this->pessoaModel = new PessoaModel();
    }

    public function index() {
        $pessoas = $this->pessoaModel->listar(); // Lista as pessoas
        require '../app/views/home/index.php'; // Passa para a view
    }
    
}
