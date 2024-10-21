<?php
require '../app/models/PessoaModel.php'; // Importando o modelo

class PessoaController {
    private $pessoaModel;

    public function __construct() {
        $this->pessoaModel = new PessoaModel();
    }

    public function index() {
        require '../app/views/pessoa/create.php'; // Passa para a view
    }
    
    public function cadastrar($nome, $email) {
        $resultado = $this->pessoaModel->cadastrar($nome, $email);
        if ($resultado) {
            // Redireciona para a home após o cadastro
            header("Location: /home");
            exit;
        } else {
            // Tratar erro aqui, talvez redirecionar de volta com uma mensagem
            echo "Erro ao cadastrar.";
        }
    }
    
}
