<?php

class Usuario {

    private $conn;
    private $table_name = "t17_usuario_habitacao";
    public $id;
    public $nome;
    public $email;
    public $nivel;
    public $senha;
    
    public function __construct($db) {
        $this->conn = $db;
    }
    
    function readAll() {

        $query = "SELECT id, 
                         nome, 
                         email, 
                         CASE WHEN nivel = 1 THEN 'Equipe' ELSE 'Administrador' END AS nivel, 
                         data_inscricao
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    function create() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET nome=:nome, email=:email, nivel=:nivel, senha=:senha, data_inscricao=:data_inscricao";

        $stmt = $this->conn->prepare($query);

        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->nivel = htmlspecialchars(strip_tags($this->nivel));
        $this->senha = htmlspecialchars(strip_tags($this->senha));

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":nivel", $this->nivel);
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
    
    function update() {

        $query = "UPDATE " . $this->table_name . "
                     SET nome = :nome,
                         email = :email,
                         nivel = :nivel,
                         senha = :senha
                   WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->nivel = htmlspecialchars(strip_tags($this->nivel));
        $this->senha = htmlspecialchars(strip_tags($this->senha));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':nivel', $this->nivel);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
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
    
    function readOne() {

        $query = "SELECT nome, email, nivel  
                    FROM " . $this->table_name . "
                   WHERE id = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nome = $row['nome'];
        $this->email = $row['email'];
        $this->nivel = $row['nivel'];
    }

}

?>