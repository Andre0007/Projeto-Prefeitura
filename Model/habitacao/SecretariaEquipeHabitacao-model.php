<?php

class SecEquipeHabitacao {

    private $conn;
    private $table_name = "t18_equipe_habitacao";
    public $id;
    public $nome;
    public $descricao;
    public $url;
    public $data_inscricao;
    
    public function __construct($db) {
        $this->conn = $db;
    }
    
    function readAll() {

        $query = "SELECT id, nome, DATE_FORMAT(data_inscricao,'%d/%m/%Y %H:%m:%s') data_inscricao
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function create() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET nome=:nome, descricao=:descricao, url=:url, data_inscricao=NOW()";

        $stmt = $this->conn->prepare($query);

        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->descricao = $this->descricao;
        $this->url = htmlspecialchars(strip_tags($this->url));

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":descricao", $this->descricao);
        $stmt->bindParam(":url", $this->url);

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
                         descricao = :descricao,
                         url = :url
                   WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->descricao = $this->descricao;
        $this->url = htmlspecialchars(strip_tags($this->url));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':url', $this->url);
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

        $query = "SELECT nome, descricao, url 
                    FROM " . $this->table_name . "
                   WHERE id = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nome = $row['nome'];
        $this->descricao = $row['descricao'];
        $this->url = $row['url'];
    }
    
    function readList() {

        $query = "SELECT id, nome, url, descricao
                    FROM " . $this->table_name . " ";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

}

?>