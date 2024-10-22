<?php
require '../app/models/PessoaModel.php';

class PessoaController {
    private $pessoaModel;

    public function __construct() {
        $this->pessoaModel = new PessoaModel();
    }

    public function index() {
        require '../app/views/pessoa/create.php';
    }
    
    public function cadastrar($nome, $email) {
        $id = $_POST['id'] ?? null;
    
        if ($id) {
            $resultado = $this->pessoaModel->atualizar($id, $nome, $email);
        } else {
            $resultado = $this->pessoaModel->cadastrar($nome, $email);
        }
    
        if ($resultado) {
            header("Location: /home");
            exit;
        } else {
            echo "Erro ao salvar.";
        }
    }
    
    public function editar($id) {
        $pessoa = $this->pessoaModel->buscarPorId($id);
        
        if ($pessoa) {
            require '../app/views/pessoa/edit.php';
        } else {
            echo "Pessoa não encontrada!";
        }
    }

    public function deletar($id) {
        $resultado = $this->pessoaModel->deletar($id);
    
        if ($resultado) {
            // Redirecionar de volta para a home após a deleção
            header("Location: /home");
            exit;
        } else {
            echo "Erro ao deletar a pessoa.";
        }
    }
    
}
