<?php

class Usuario {

    private $conn;
    private $table_name = "t09_usuario_licitacao";
    public $id;
    public $nome;
    public $email;
    public $usuario;
    public $senha;
    
    public function __construct($db) {
        $this->conn = $db;
    }

    function delete() {

        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    function update() {

        $query = "UPDATE " . $this->table_name . "
                     SET nome = :nome,
                         email = :email,
                         usuario = :usuario,
                         senha = :senha
                   WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->usuario = htmlspecialchars(strip_tags($this->usuario));
        $this->senha = htmlspecialchars(strip_tags($this->senha));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':usuario', $this->usuario);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function readOne() {

        $query = "SELECT nome, email, usuario  
                    FROM " . $this->table_name . "
                   WHERE id = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nome = $row['nome'];
        $this->email = $row['email'];
        $this->usuario = $row['usuario'];
    }

    function create() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET nome=:nome, email=:email, usuario=:usuario, senha=:senha, data_inscricao=:data_inscricao";

        $stmt = $this->conn->prepare($query);

        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->usuario = htmlspecialchars(strip_tags($this->usuario));
        $this->senha = htmlspecialchars(strip_tags($this->senha));

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":usuario", $this->usuario);
        $stmt->bindParam(":senha", $this->senha);
        $stmt->bindParam(":data_inscricao", $this->data_inscricao);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "<pre>";
                   print_r($stmt->errorInfo());
            echo "</pre>";

            return false;
        }
    }

    function readAll() {

        $query = "SELECT id, nome, email, usuario, data_inscricao
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

}

?>