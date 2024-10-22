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
        $query = "SELECT * FROM pessoas";
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function cadastrar($nome, $email) {
        // Prepara e executa a inserção
        $stmt = $this->db->prepare("INSERT INTO pessoas (nome, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $nome, $email);
        return $stmt->execute();
    }

    public function buscarPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM pessoas WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
    
    public function atualizar($id, $nome, $email) {
        $stmt = $this->db->prepare("UPDATE pessoas SET nome = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssi", $nome, $email, $id);
        return $stmt->execute();
    }    

    public function deletar($id) {
        $stmt = $this->db->prepare("DELETE FROM pessoas WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }    

}
