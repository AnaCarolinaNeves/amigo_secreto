<?php
class PessoaModel {
    private $db;

    public function __construct() {
        // Conectar ao banco de dados
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->db->connect_error) {
            die("Conexão falhou: " . $this->db->connect_error);
        }
    }

    public function listar() {
        $query = "SELECT * FROM pessoas"; // Supondo que a tabela se chama 'pessoas'
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function cadastrar($nome, $email) {
        // Prepara e executa a inserção
        $stmt = $this->db->prepare("INSERT INTO pessoas (nome, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $nome, $email);
        return $stmt->execute();
    }

}
