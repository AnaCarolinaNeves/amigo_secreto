<?php
require '../app/models/PessoaModel.php'; // Importando o modelo

class SorteioController {
    private $pessoaModel;

    public function __construct() {
        $this->pessoaModel = new PessoaModel();
    }

    public function realizarSorteio() {
        $pessoas = $this->pessoaModel->listar();
        if (count($pessoas) < 2) {
            echo "É necessário ter pelo menos 2 pessoas para realizar o sorteio.";
            return;
        }

        $resultados = [];
        $nomes = array_column($pessoas, 'nome');

        shuffle($nomes);

        for ($i = 0; $i < count($nomes); $i++) {
            $resultados[$nomes[$i]] = $nomes[($i + 1) % count($nomes)];
        }

        require '../app/views/sorteio/resultado.php';
    }
}
