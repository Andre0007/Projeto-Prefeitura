<?php

class RepasseFederal {

    private $conn;
    private $table_name = "t16_repasse_federal";
    public $id;
    public $nome_titulo;
    public $url;
    public $data_lancamento;

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
    
    function create() {

        $query = "INSERT INTO " . $this->table_name . "
                  SET nome_titulo=:nome_titulo, 
                      url=:url, 
                      data_lancamento=:data_lancamento";

        $stmt = $this->conn->prepare($query);

        $this->nome_titulo = htmlspecialchars(strip_tags($this->nome_titulo));
        $this->url = htmlspecialchars(strip_tags($this->url));

        $stmt->bindParam(":nome_titulo", $this->nome_titulo);
        $stmt->bindParam(":url", $this->url);
        $stmt->bindParam(":data_lancamento", $this->data_lancamento);

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
                     SET nome_titulo = :nome_titulo,
                         url=:url
                   WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $this->nome_titulo = htmlspecialchars(strip_tags($this->nome_titulo));
        $this->url = htmlspecialchars(strip_tags($this->url));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(':nome_titulo', $this->nome_titulo);
        $stmt->bindParam(":url", $this->url);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    function readAll() {

        $query = "SELECT id, nome_titulo, DATE_FORMAT(data_lancamento,'%d/%m/%Y %H:%m:%s') data_lancamento
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function readList() {

        $query = "SELECT nome_titulo, url
                    FROM " . $this->table_name . "
                ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    
    function readOne() {

        $query = "SELECT nome_titulo
                    FROM " . $this->table_name . "
                   WHERE id = ? 
                   LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
       
        $this->nome_titulo = $row['nome_titulo'];
    }

}

?>